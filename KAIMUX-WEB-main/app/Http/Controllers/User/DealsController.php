<?php

namespace App\Http\Controllers\User;

use App\API\PaySera\WebToPay;
use App\API\Rcon\Rcon;
use App\Enumerators\ConstantType;
use App\Enumerators\CurrentDealStatus;
use App\Enumerators\OrderType;
use App\Http\Controllers\Controller;
use App\Models\BalancePlayer;
use App\Models\Constant;
use App\Models\CurrentDeal;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Service;
use App\Models\ServicesOrder;
use App\Services\ServicesService;
use App\Services\User\CartService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DealsController extends Controller
{
    /** @var CartService */
    private $cartService;

    /** @var ServicesService */
    private $servicesService;

    public function __construct(CartService $cartService, ServicesService $servicesService)
    {
        $this->cartService = $cartService;
        $this->servicesService = $servicesService;
    }
    
    public function create(Request $request): View|RedirectResponse
    {
        $username = session('username');
        $dealSlug = $request->deal;
        $currentDeal = CurrentDeal::where('slug', $dealSlug)->firstOrFail();
        $deal = $currentDeal->getDeal();
        $service = $deal->getService();

        if ($currentDeal->status !== CurrentDealStatus::NOT_USED->value)
            abort(404);

        $balancePlayer = BalancePlayer::where('name', $currentDeal->player)->first();

        if ($username !== $currentDeal->player)
            return redirect()->route('store-login')->with('error', 'Prašome prisijungti kaip ' . $currentDeal->player . ' žaidėjas');

        return $this->servicesService->createView($username, 'user.pages.deals.main', [], [
            'player' => $currentDeal->player,
            'title' => $deal->title,
            'dealId' => $currentDeal->slug,
            'price' => $deal->price,
            'service' => $service,
            'balance' => $balancePlayer ? $balancePlayer->balance : 0
        ]);
    }

    public function buy(Request $request): RedirectResponse
    {
        $currentDealSlug = $request->deal;
        $currentDeal = CurrentDeal::where('slug', $currentDealSlug)->firstOrFail();
        $username = $currentDeal->player;
        $deal = $currentDeal->getDeal();
        $price = $deal->price;
        $service = Service::findOrFail($deal->service);
        
        $balance = 0;
        $balancePlayer = BalancePlayer::firstOrNew(['name' => $username]);
        if ($balancePlayer)
            $balance = $balancePlayer->balance;

        if ($balance < $price) {
            return redirect()->route('deals', ['username' => $username, 'deal' => $currentDealSlug, 'error' => 'Nepakanka pinigų']);
        }
        $currentDeal->status = CurrentDealStatus::USED->value;
        $currentDeal->save();

        $serviceOrder = new ServicesOrder();
        $serviceOrder->username = $username;
        $serviceOrder->service = $deal->service;
        $serviceOrder->save();
        
        $balancePlayer->balance -= $price;
        $balancePlayer->save();

        $this->giveToPlayer($service, $username);

        return redirect()->route('store-login')->with('success', 'Paslauga sėkmingai užsakyta');
    }

    private function giveToPlayer($service, $username)
    {
        $category = $service->getCategory();
        $server = $category->getServer();

        $rcon = new Rcon($server->rconIp, $server->rconPort, $server->rconPass, 100);
        if ($rcon->connect()) {
            $rcon->send_command('package give '.$username.' '.$service->package);
        } else {
            die('Could not connect to server!');
        }
    }
}
