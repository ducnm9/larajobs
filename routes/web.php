<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job-now', function () {
    \App\Jobs\ProcessPodcast::dispatch();

    return "run jobs now";
});

Route::get('/job-last-1-minute', function () {
    \App\Jobs\ProcessPodcast2::dispatch()
        ->delay(now()->addMinutes(1));

    return "run jobs last 1 minute";
});
