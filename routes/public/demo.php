<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;



Route::name('cookie.')
    ->group(function () {
        Route::post('/get-cookie', [CookieController::class, 'getCookie'])->name('get');
        Route::post('/set-cookie', [CookieController::class, 'setCookie'])->name('set');
        Route::get('/demo', [CookieController::class, 'demo'])->name('demo');
        Route::get('/demo2', [CookieController::class, 'demo2'])->name('demo2');
    });
