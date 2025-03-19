<?php

namespace App\Http\Controllers\User;

use App\API\PaySera\WebToPay;
use App\Enumerators\OrderType;
use App\Http\Controllers\Controller;
use App\Models\BalanceFilling;
use App\Models\Payment;
use App\Services\ServicesService;
use App\Services\User\CartService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BalanceTopupController extends Controller
{

    /** @var ServicesService */
    private $servicesService;

    public function __construct(ServicesService $servicesService)
    {
        $this->servicesService = $servicesService;
    }

    public function create(Request $request): View
    {
        $username = session('username');
        if ($username) {
            return $this->servicesService->createView($username, 
            'user.pages.services.balance-topup', 
            [
                'username' => $username,
                'services' => BalanceFilling::all(),
                'errorAmount' => $request->errorAmount,
                'goBackBalanse' => true
            ], 
            []);
        } else {
            return redirect()->route('store-login')->with('error', 'Toks slapyvardis žaidime neegzistuoja!');
        }
    }

    public function buy(Request $request)
    {
        $username = $request->input('username');
        $amount = (int) $request->input('amount');

        if (!$username) {
            return redirect()->route('store-login')->with('error', 'Toks slapyvardis žaidime neegzistuoja!');
        }

        if ($amount < 2) {
            return redirect()->route('balance-topup', [
                'username' => $username,
                'errorAmount' => 1
            ]);
        }

        $orderId = rand(1000000, 9999999);
        while (Payment::where('orderId', $orderId)->first()) {
            $orderId = rand(100000, 999999);
        }
        
        $payment = new Payment();
        $payment->service = "Balance topup";
        $payment->orderType = OrderType::BANK;
        $payment->username = $username;
        $payment->amount = $amount * 100;
        $payment->orderId = $orderId;
        $payment->save();

        $toAdress = WebToPay::redirectToPayment([
            'projectid' => env('PAYSERA_PROJECT_ID'),
            'sign_password' => env('PAYSERA_PROJECT_PASSWORD'),
            'orderid' => $payment->orderId,
            'amount' => $amount * 100,
            'currency' => 'EUR',
            'country' => 'LT',
            'accepturl' => url('/') . '/success',
            'cancelurl' => url('/') . '/cancel',
            'callbackurl' => url('/') . '/paysera/bank',
            'test' => env('PAYSERA_TEST', 0),
        ]);
        die($toAdress);
    }
}
