<?php

namespace App\Console\Commands;

use App\Enumerators\DJStatus;
use App\Models\DJCurrentlyListening;
use App\Models\DJQueue;
use Illuminate\Console\Command;

class RemoveAllDjQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:remove-all-dj-queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes DJ queue';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $djQueue = DJQueue::where('status', DJStatus::PLAYED)->get();
        foreach ($djQueue as $dj) {
            $dj->delete();
        }
        $djCurrentlyListening = DJCurrentlyListening::all();
        foreach ($djCurrentlyListening as $dj) {
            $dj->delete();
        }
        return 0;
    }
}
