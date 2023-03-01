<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::prefix('contact')
    ->group(function () {
        Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    });
