<?php

namespace App\Http\Controllers\PaySera;

use App\API\PayPal\Core\PayPalHttpClient;
use App\API\PayPal\Core\ProductionEnvironment;
use App\API\PayPal\Core\SandboxEnvironment;
use App\API\PayPal\Orders\OrdersCaptureRequest;
use App\Enumerators\OrderType;
use App\Http\Controllers\Controller;
use App\Models\BalancePlayer;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    
    public function get(Request $request)
    {
        $amount = $request->amount;
        $username = $request->username;
        $orderID = $request->data["orderID"];

        $paypal = new PayPalHttpClient(self::environment());
        $request = new OrdersCaptureRequest($orderID);
        $response = response()->json($paypal->execute($request));

        $content = $response->getOriginalContent();
        if($content->result->status === 'COMPLETED'){
            $payment = new Payment();
            $payment->service = "PayPal " . $orderID;
            $payment->orderType = OrderType::BANK;
            $payment->username = $username;
            $payment->from = "PayPal";
            $payment->amount = $amount * 100;
            $payment->orderId = rand(100000000, 999999999);
            $payment->orderStatus = true;
            $payment->test = false;
            $payment->save();

            $balancePlayer = BalancePlayer::firstOrNew(['name' => $username]);
            $balancePlayer->balance += $amount * 100;
            $balancePlayer->save();
        }
        return $response;
    }

    public static function environment()
    {
        $clientId = getenv("PAYPAL_CLIENT_ID");
        $clientSecret = getenv("PAYPAL_CLIENT_SECRET");
        if (env('APP_ENV', 'local') === 'production')
            return new ProductionEnvironment($clientId, $clientSecret);
        else
            return new SandboxEnvironment($clientId, $clientSecret);
    }
}
