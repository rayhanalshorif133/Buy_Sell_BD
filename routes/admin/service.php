<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::middleware('auth')
    ->prefix('user/service')
    ->name('user.service.')
    ->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::post('/store-or-Update', [ServiceController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::delete('/{id}/delete', [ServiceController::class, 'delete'])->name('delete');
    });
