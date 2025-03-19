<?php

namespace App\Console\Commands;

use App\API\Rcon\Rcon;
use App\Enumerators\ConstantType;
use App\Enumerators\OrderType;
use App\Models\Constant;
use App\Models\DiscountCode;
use App\Models\Payment;
use App\Models\Server;
use Illuminate\Console\Command;

class GiveDiscountsIfGoalReached extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:give-discounts-if-goal-reached';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give discounts to users if their goal is reached';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $goal = Constant::where('type', ConstantType::MONTHLY_GOAL)->first()->value;
        $payments = Payment::where('orderStatus', true)
                    ->whereDate('created_at', '>=', now()->subMonth())
                    ->where('test', false)
                    ->get();
        $all = [];
        $totalSum = 0;
        foreach ($payments as $payment) {
            if (!isset($all[$payment->username])) {
                $all[$payment->username] = 0;
            }
            $all[$payment->username] += $payment->amount;
            if ($payment->orderType === OrderType::SMS->value) {
                $totalSum += ($payment->amount / 100) * 0.4;
            } else {
                $totalSum += $payment->amount / 100;
            }
        }
        $servers = Server::all();
        $usersThatGotCode = [];
        if ($totalSum >= $goal) {
            foreach ($all as $username => $amount) {
                if ($amount > 5000) {
                    $code = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6);;
                    $discount = new DiscountCode();
                    $discount->title = "GOAL REACHED/" . $username;
                    $discount->code = $code;
                    $discount->valid_from = now();
                    $discount->valid_to = now()->addDays(30);
                    $discount->valid_for = $username;
                    $discount->limit = 3;
                    $discount->amount = 50;
                    $discount->uses = 0;
                    $discount->save();

                    $usersThatGotCode[$username] = $code;
                }
            }
            
            foreach ($servers as $server) {
                $rcon = new Rcon($server->rconIp, $server->rconPort, $server->rconPass, 100);
                if ($rcon->connect()) {
                    foreach ($usersThatGotCode as $username => $code)
                        $rcon->send_command('mail send ' . $username . ' Jūs gavote 50% nuolaidos kodą visoms paslaugos 3 kartus! Kodas: ' . $code);
                }
            }
        }
        return 0;
    }
}
