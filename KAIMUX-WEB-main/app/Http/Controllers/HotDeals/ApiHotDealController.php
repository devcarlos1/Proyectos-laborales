<?php

namespace App\Http\Controllers\HotDeals;

use App\Enumerators\CurrentDealStatus;
use App\Enumerators\DealType;
use App\Http\Controllers\Controller;
use App\Models\CurrentDeal;
use App\Models\Deal;
use App\Models\Payment;
use Illuminate\Http\Request;

class ApiHotDealController extends Controller
{
    const AFTER_LAST_PURCHASE = 35;
    const AFTER_NOT_PURCHASING = 7;

    public function getHotDeal(Request $request): array
    {
        $player = $request->username;
        $server = $request->servername;

        $currentPlayerDeal = CurrentDeal::where('player', $player)->where('servername', $server)->where('status', CurrentDealStatus::NOT_USED->value)->first();
        
        if ($currentPlayerDeal === null) {
            $currentPlayerDeal = $this->findADeal($player, $server);
        }

        if ($currentPlayerDeal === null) {
            return [
                'status' => 0
            ];
        }

        $deal = $currentPlayerDeal->getDeal();

        if ($deal->betterDeal !== null 
        && $deal->dealType === DealType::FIRST_JOIN_DEAL->value
        && $currentPlayerDeal->created_at->lt(date('Y-m-d H:i:s', strtotime('-'.self::AFTER_NOT_PURCHASING.' days')))
        ) {
            if ($deal->betterDeal !== null) {
                $currentPlayerDeal->status = CurrentDealStatus::EXPIRED->value;
                $currentPlayerDeal->save();

                $currentPlayerDeal = new CurrentDeal();
                $currentPlayerDeal->slug = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
                $currentPlayerDeal->player = $player;
                $currentPlayerDeal->servername = $server;
                $currentPlayerDeal->deal = $deal->betterDeal;
                $currentPlayerDeal->status = CurrentDealStatus::NOT_USED->value;
                $currentPlayerDeal->save();

                $deal = $currentPlayerDeal->getDeal();
            }
        }

        $infoFull = str_replace('$link', env('APP_URL').'deals/'.$currentPlayerDeal->slug, $deal->infoFull);
        $infoFull = str_replace('$player', $player, $infoFull);

        return [
            'status' => 1,
            'scoreBoard' => $deal->infoTable,
            'information' => $infoFull
        ];
    }

    private function findADeal(string $player, string $server): ?CurrentDeal
    {
        $lastPayment = $this->getLastPayment($player);
        if ($lastPayment !== null) {
            if ($lastPayment->updated_at->lt(date('Y-m-d H:i:s', strtotime('-'.self::AFTER_LAST_PURCHASE.' days')))) {
                $deals = Deal::where('dealType', DealType::DAYS_35_AFTER_LAST_PURCHASE->value)
                            ->where('server', $server)->get();
                if (count($deals) > 0) {
                    $deal = $deals->random();
    
                    $currentDeal = new CurrentDeal();
                    $currentDeal->slug = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
                    $currentDeal->player = $player;
                    $currentDeal->servername = $server;
                    $currentDeal->deal = $deal->id;
                    $currentDeal->status = CurrentDealStatus::NOT_USED->value;
                    $currentDeal->save();
    
                    return $currentDeal;
                }
            }
        }
        if ($lastPayment === null) {
            $deals = Deal::where('dealType', DealType::FIRST_JOIN_DEAL->value)->where('server', $server)->get();
            if (count($deals) > 0) {
                $deal = $deals->random();

                $currentDeal = new CurrentDeal();
                $currentDeal->slug = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
                $currentDeal->player = $player;
                $currentDeal->servername = $server;
                $currentDeal->deal = $deal->id;
                $currentDeal->status = CurrentDealStatus::NOT_USED->value;
                $currentDeal->save();

                return $currentDeal;
            }
        }
        return null;
    }

    private function getLastPayment(string $player): ?Payment
    {
        return Payment::where('username', $player)->orderBy('id', 'desc')->first();
    }
}
