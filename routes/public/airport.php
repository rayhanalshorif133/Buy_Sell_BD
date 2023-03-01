<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirportController;


Route::prefix('airport')
    ->name('airport.')
    ->group(function () {
        Route::get('/{name}/get', [AirportController::class, 'getAirport'])->name('getAirport');
    });
