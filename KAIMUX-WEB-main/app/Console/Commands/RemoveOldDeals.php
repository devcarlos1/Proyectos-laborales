<?php

namespace App\Console\Commands;

use App\Models\CurrentDeal;
use Illuminate\Console\Command;

class RemoveOldDeals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:remove-old-deals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes old deals';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $deals = CurrentDeal::whereDate('created_at', '<', now()->subDays(30))->get();
        foreach ($deals as $deal) {
            $deal->delete();
        }
        return 0;
    }
}
