<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


Route::prefix('about')
    ->name('about.')
    ->group(function () {
        Route::get('/get', [AboutController::class, 'getAbout'])->name('getAbout');
    });
