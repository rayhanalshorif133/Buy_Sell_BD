<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;


Route::prefix('user/color')
    ->middleware('auth')
    ->name('user.color.')
    ->group(function () {
        Route::get('/{id?}', [ColorController::class, 'index'])->name('index');
        Route::post('/store', [ColorController::class, 'store'])->name('store');
        Route::post('/{id}/update', [ColorController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [ColorController::class, 'delete'])->name('delete');
    });
