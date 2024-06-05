<?php

use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    \Illuminate\Support\Facades\Log::info('Schedule 1 minute');
})->everyMinute();


Schedule::command('app:send-log5minute')->everyFiveMinutes();
