<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhatWeDoController;


Route::middleware('auth')
    ->prefix('user/what-we-do')
    ->name('user.what-we-do.')
    ->group(function () {
        Route::get('/', [WhatWeDoController::class, 'index'])->name('index');
        Route::post('/store-or-Update', [WhatWeDoController::class, 'storeOrUpdate'])->name('storeOrUpdate');
    });