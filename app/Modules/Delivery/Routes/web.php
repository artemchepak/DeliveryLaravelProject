<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Delivery\Controllers\DeliveryController;

Route::get('/', [DeliveryController::class, 'allData'])->name('home');

Route::post('/', [DeliveryController::class, 'submit'])->name('address-form');

Route::get('/test', function (){
    return view('test');
});

Route::get('/details/{id}', [DeliveryController::class, 'oneAddress'])->name('one-address-details');

Route::get('/delete/{id}', [DeliveryController::class, 'deleteAddress'])->name('address-delete');
