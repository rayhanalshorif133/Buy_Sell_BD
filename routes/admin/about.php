<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


Route::middleware('auth')
    ->prefix('user/about')
    ->name('user.about.')
    ->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/store-or-Update', [AboutController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        // Route::delete('/{id}/delete', [SliderController::class, 'delete'])->name('delete');
    });
