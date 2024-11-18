<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

use App\Http\Livewire\CreatePoll;

Route::get('/test', function() {
    return (new CreatePoll)->render();
});
