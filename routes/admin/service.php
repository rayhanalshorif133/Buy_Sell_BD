<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::middleware('auth')
    ->prefix('user/service')
    ->name('user.service.')
    ->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/{id}/details-view', [ServiceController::class, 'detailsView'])->name('detailsView');
        Route::post('/store_details', [ServiceController::class, 'store_details'])->name('store_details');
        Route::post('/update_details', [ServiceController::class, 'update_details'])->name('update_details');
        Route::post('/store-or-Update', [ServiceController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::delete('/{id}/delete', [ServiceController::class, 'delete'])->name('delete');
    });
