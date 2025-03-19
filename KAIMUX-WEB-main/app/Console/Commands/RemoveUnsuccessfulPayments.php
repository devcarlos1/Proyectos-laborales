<?php

namespace App\Console\Commands;

use App\Models\Payment;
use Illuminate\Console\Command;

class RemoveUnsuccessfulPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:remove-unsuccessful-payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removed unsuccessful payments from system';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $payments = Payment::where('orderStatus', false)
                            ->whereDate('created_at', '<', now()->subDays(3))
                            ->get();
        foreach ($payments as $payment) {
            $payment->delete();
        }
        return 0;
    }
}
