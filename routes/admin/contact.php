<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::prefix('user/contact')
    ->middleware('auth')
    ->name('user.contact.')
    ->group(function () {
        Route::get('/{id?}', [ContactController::class, 'index'])->name('index');
    });
