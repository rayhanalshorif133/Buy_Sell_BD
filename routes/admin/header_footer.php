<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderAndFooterController;


Route::middleware('auth')
    ->prefix('user/header-footer')
    ->name('user.header.')
    ->group(function () {
        Route::get('/', [HeaderAndFooterController::class, 'index'])->name('index');
        Route::post('/store-or-Update', [HeaderAndFooterController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::delete('/{id}/delete', [HeaderAndFooterController::class, 'delete'])->name('delete');
    });
