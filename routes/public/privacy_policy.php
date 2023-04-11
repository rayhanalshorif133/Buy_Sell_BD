<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyAndPolicyController;



Route::name('privacy-policy.')
    ->controller(PrivacyAndPolicyController::class)
    ->group(function () {
        Route::get('privacy-policy','index')->name('index');
    });
