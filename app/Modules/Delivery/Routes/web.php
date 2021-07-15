<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Delivery\Controllers\DeliveryController;

Route::get('/', function () {
    return view('user_office_address');
});

Route::post('/', [DeliveryController::class, 'submit']);
