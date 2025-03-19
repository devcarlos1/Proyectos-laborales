<?php

namespace App\Http\Controllers\User;

use App\API\Rcon\Rcon;
use App\Http\Controllers\Controller;
use App\Models\BalancePlayer;
use App\Models\DiscountCode;
use App\Models\ServicesOrder;
use App\Services\ServicesService;
use App\Services\User\CartService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    private $cartService;

    /** @var ServicesService */
    private $servicesService;

    public function __construct(CartService $cartService, ServicesService $servicesService)
    {
        $this->cartService = $cartService;
        $this->servicesService = $servicesService;
    }
    
    public function create(): View
    {
        $username = session('username');
        return $this->servicesService->createView($username, 'user.pages.services.cart', [
            'username' => $username,
            'cart' => $this->cartService->getCart(),
            'goBack' => true
        ], []);
    }

    public function buy(Request $request)
    {
        $username = session('username');
        $discountCode = null;
        $balance = 0;
        $balancePlayer = BalancePlayer::firstOrNew(['name' => $username]);

        if ($request->has('discount'))
            $discountCode = strtoupper($request->input('discount'));
        if ($balancePlayer)
            $balance = $balancePlayer->balance;

        $discount = $this->getDiscount($discountCode);
        $cart = $this->cartService->getCart();

        if (sizeof($cart) == 0) {
            return redirect()->route('cart')->with('error', 1);
        }

        if ($discount && $discount->valid_for && $discount->valid_for != $username) {
            return redirect()->route('cart')->with('error', 2);
        }

        $price = $this->cartService->getPrice($cart, $discount);

        if ($price > $balance) {
            return redirect()->route('cart')->with('error', 3);
        }

        if ($discount)
            $discount->save();

        $balance -= $price;
        $balancePlayer->name = $username;
        $balancePlayer->balance = $balance;
        $balancePlayer->save();

        foreach ($cart as $service) {
            $i = $service['count'];
            while ($i > 0) {
                $serviceOrder = new ServicesOrder();
                $serviceOrder->username = $username;
                $serviceOrder->service = $service['service']->id;
                $serviceOrder->save();
                $i--;
            }
        }

        $this->giveServicesToPlayer($username, $cart);
        $this->cartService->clearCart();

        return redirect()->route('cart')->with('success', true);
    }

    private function getDiscount($discountCode): ?DiscountCode
    {
        $discount = DiscountCode::where('code', $discountCode)->first();
        if ($discount === null) {
            return null;
        }
        if (strtotime($discount->valid_from) > strtotime(date('Y-m-d H:i:s')) || strtotime($discount->valid_to) < strtotime(date('Y-m-d H:i:s'))) {
            return null;
        }
        return $discount;
    }

    private function giveServicesToPlayer($username, $cart)
    {
        foreach ($cart as $service) {
            $i = $service['count'];
            while ($i > 0) {
                $this->giveToPlayer($service['service'], $username);
                $i--;
            }
        }
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
