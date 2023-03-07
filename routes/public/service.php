<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


Route::prefix('services')
    ->name('services.')
    ->group(function () {
        Route::get('/{serviceName?}/{serviceItemName?}', [ServiceController::class, 'view'])->name('view-details');
    });
