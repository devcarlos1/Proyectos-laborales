<?php

namespace App\Http\Controllers\PaySera;

use App\API\PaySera\WebToPay;
use App\API\Rcon\Rcon;
use App\Http\Controllers\Controller;
use App\Models\BalancePlayer;
use App\Models\Payment;
use App\Models\Service;
use Exception;

class BankController extends Controller
{
    public function get()
    {
        try {
            $response = WebToPay::validateAndParseData(
                $_REQUEST,
                env('PAYSERA_PROJECT_ID'),
                env('PAYSERA_PROJECT_PASSWORD')
            );
            $payment = Payment::where('orderId', $response['orderid'])->first();
            if (!$payment) {
                die('OK ERROR: Payment doesn\'t exist in the system');
            }
            if (!$payment->orderStatus && $payment->username) {
                $balancePlayer = BalancePlayer::firstOrNew(['name' => $payment->username]);
                $balancePlayer->balance += $payment->amount;
                $balancePlayer->save();
                         
                $payment->from = $response['p_email'];
                $payment->orderStatus = true;
                $payment->test = $response['test'];
                $payment->save();
                
                die('OK');
            } else {
                die('OK ERROR: This payment has already been processed!');
            }
        } catch (Exception $exception) {
            die(get_class($exception) . ':' . $exception->getMessage());
        }
    }
}
