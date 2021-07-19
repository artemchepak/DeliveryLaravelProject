<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Delivery\Controllers\DeliveryController;

Route::get('/', [DeliveryController::class, 'allData'])->name('home');

Route::post('/', [DeliveryController::class, 'submit'])->name('address-form');

Route::get('/delete/{id}', [DeliveryController::class, 'deleteAddress'])->name('address-delete');
