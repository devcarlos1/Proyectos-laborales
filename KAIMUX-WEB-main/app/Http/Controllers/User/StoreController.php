<?php

namespace App\Http\Controllers\User;

use App\API\Rcon\Rcon;
use App\Http\Controllers\Controller;
use App\Models\Server;
use App\Services\ServicesService;
use App\Services\User\CartService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StoreController extends Controller
{
    private $serverIP = "192.168.88.250";
    private $serverPort = 25574;
    private $rconPassword = "lrK7r7awzdUq9aMd1";

    /** @var CartService */
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
        return $this->servicesService->createView(null, 'user.pages.services.login', [], []);
    }

    public function login(Request $request): View|RedirectResponse
    {
        if (!$request->has('terms')) {
            return redirect()->route('store-login')->with('error', 'Nepatvirtinote, kad sutinkate su paslaugų teikimo sąlygomis.');
        }

        $username = $request->input('username');
        $password = $request->input('password');

        $response = -1;
        try {
            $rcon = new Rcon($this->serverIP, $this->serverPort, $this->rconPassword, 100);
            if ($rcon->connect()) {
                $rcon->send_command("login check " . $username . " " . $password);
                $response = intval($rcon->get_response());
                $rcon->disconnect();
            }
        } catch (\Exception $exception) {

        }

        if (env("APP_ENV", "local") === "local") {
            $response = 1;
        }

        if ($response === -1) {
            return redirect()->route('store-login')->with('error', 'Nebuvo įmanoma prisijungti prie serverio...');
        } else if ($response === 0) {
            return redirect()->route('store-login')->with('error', 'Vartotojas nerastas!');
        } else if ($response === 1 || $response === 4) {
            $request->session()->put('username', $username);
            return redirect()->route('store-main');
        } else if ($response === 2) {
            return redirect()->route('store-login')->with('error', 'Neteisingas slaptažodis!');
        } else if ($response === 3) {
            return redirect()->route('store-login')->with('error', 'Neteisingas vardas!');
        } else {
            return redirect()->route('store-login')->with('error', 'Nenumatyta klaida...');
        }
    }

    public function main(Request $request): View|RedirectResponse
    {
        $username = session('username');

        if ($username !== null) {
            return $this->servicesService->createView($username, 'user.pages.services.main', [
                'username' => $username
            ], [
                'servers' => Server::orderBy('line')->get(),
                'mostPopularServices' => $this->servicesService->getMostPopularServices()
            ]);
        } else {
            return redirect()->route('store-login');
        }
    }
}
