<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::middleware('auth')
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('{id}/edit/', [UserController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [UserController::class, 'update'])->name('update');
        Route::delete('{id}/delete', [UserController::class, 'destroy'])->name('destroy');
    });
