<?php

namespace App\Services;

use App\Enumerators\ConstantType;
use App\Enumerators\OrderType;
use App\Models\BalancePlayer;
use App\Models\Constant;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Service;
use App\Models\ServicesOrder;
use App\Services\User\CartService;
use Illuminate\View\View;

class ServicesService
{
    /** @var CartService */
    private $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
    
    public function getDiscountCodeUseTimes(string $discountCode): int
    {
        return Payment::where([['discountCode', '=', $discountCode], ['orderStatus', '=', true]])->count();
    }

    public function createView(?string $username, string $view, array $requestArgs, array $args): View
    {
        $defaultArgs = [
            'goal' => $this->getCurrentGoal(),
            'lastBuyers' => $this->getLastThreeBuyers(),
            'mostDonated' => $this->getMostDonated(),
            'paymentMethods' => PaymentMethod::all(),
            'cartPrice' => $this->cartService->getCartPrice(),
            'balance' => $this->getBalance($username)
        ];
        $allArgs = array_merge($defaultArgs, $args);
        return View($view, $requestArgs)->with($allArgs);
    }

    private function getBalance(?string $username): int
    {
        if ($username === null)
            return 0;
        $balance = BalancePlayer::where('name', $username)->first();
        if ($balance === null)
            return 0;
        else
            return $balance->balance;
    }

    private function getCurrentGoal(): int
    {
        $goal = (int) Constant::where('type', ConstantType::MONTHLY_GOAL)->first()->value;
        $current = 0;
        $from = date("Y-m-01 00:00:00");
        $to = date("Y-m-d H:i:s");
        $payments = Payment::whereDate('created_at', '>=', $from)
                            ->whereDate('created_at', '<=', $to)
                            ->where('orderStatus', true)
                            ->get();

        foreach ($payments as $payment) {
            if ($payment->orderType === OrderType::BANK->value) {
                $current += $payment->amount / 100;
            } else {
                $current += ($payment->amount / 100) * 0.4;
            }
        }
        $reached = $current / $goal * 100;
        return $reached >= 100 ? 100 : round($reached);
    }

    public function getLastThreeBuyers(): array
    {
        $buyers = [];
        foreach (Payment::where('orderStatus', true)->orderBy('created_at', 'desc')->take(25)->get() as $payment) {
            if (in_array($payment->username, $buyers))
                continue;
            $buyers[] = $payment->username;
            if (sizeof($buyers) == 3) 
                break;
        }
        return $buyers;
    }

    private function getMostDonated(): string
    {
        $tmp = [];
        $all = Payment::where('orderStatus', true)->get();
        foreach ($all as $payment) {
            if (!isset($tmp[$payment->username]))
                $tmp[$payment->username] = 0;
            $tmp[$payment->username] += $payment->amount;
        }
        arsort($tmp);
        return array_keys($tmp) ? array_keys($tmp)[0] : "Notch";
    }

    public function getMostPopularServices(): array
    {
        $services = [];
        $from = date('Y-m-d H:i:s', strtotime("-30 days"));
        $orders = ServicesOrder::whereDate('created_at', '>=', $from)->get();

        foreach ($orders as $order) {
            if (!isset($services[$order->service]))
                $services[$order->service] = 0;
            $services[$order->service] += 1;
        }

        arsort($services);
        $return = [];
        $i = 0;
        foreach ($services as $key => $value) {
            $return[] = Service::find($key);
            $i++;
            if ($i == 4)
                break;
        }
        if (count($return) < 4)
            return [];
        return $return;
    }
}
