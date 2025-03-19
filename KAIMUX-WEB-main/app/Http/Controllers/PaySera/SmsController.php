<?php

namespace App\Http\Controllers\PaySera;

use App\API\PaySera\WebToPay;
use App\API\Rcon\Rcon;
use App\Enumerators\OrderType;
use App\Http\Controllers\Controller;
use App\Models\BalanceFilling;
use App\Models\BalancePlayer;
use App\Models\Payment;
use App\Models\Service;
use Exception;

class SmsController extends Controller
{
    public function get()
    {
        try {
            $response = WebToPay::validateAndParseData(
                $_REQUEST,
                env('PAYSERA_PROJECT_ID'),
                env('PAYSERA_PROJECT_PASSWORD')
            );

            if ($this->isPaymentValid($response)) {
                $sms = explode(' ', $response['sms']);
                $key = strtoupper($sms[0]);
                $username = sizeof($sms) == 2 ? $sms[1] : null;

                $payment = new Payment();
                $payment->service = $key;
                $payment->orderType = OrderType::SMS;
                $payment->username = $username;
                $payment->from = $response['from'];
                $payment->amount = $response['amount'];
                $payment->orderId = $response['id'];
                $payment->orderStatus = true;
                $payment->test = false;
                
                $payment->save();
                if (sizeof($sms) != 2) {
                    die('OK Užsakydami paslaugą jūs neįvedėte savo slapyvardžio. Pinigai buvo nuskaičiuoti. Prašome susisiekti per https://kaimux.lt/discord');
                }
                
                $price = $response['amount'] / 100;

                $balanceFilling = BalanceFilling::where('key', $key)->first();

                $balancePlayer = BalancePlayer::firstOrNew(['name' => $payment->username]);
                $balancePlayer->balance += $balanceFilling->topup;
                $balancePlayer->save();

                die('OK Balansas buvo sėkmingai papildytas. Paslaugos kaina: ' . $price . '€. Užsakyta: '.date("Y-m-d H:i:s"));
            } else {
                die('ERROR: This payment has already been processed!');
            }
        } catch (Exception $exception) {
            die(get_class($exception) . ':' . $exception->getMessage());
        }
    }

    private function isPaymentValid(array $response): bool
    {
        return !Payment::where('orderId', $response['id'])->exists();
    }
}
