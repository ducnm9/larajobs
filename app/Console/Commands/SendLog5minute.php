<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendLog5minute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-log5minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description write log every 5 minutes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info("Schedule every 5 minutes:" . Carbon::now()->toDateTimeString());
    }
}
