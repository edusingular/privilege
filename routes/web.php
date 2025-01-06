<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

Route::get('/',    [DashboardController::class, 'index'])->name('dashboard');


Route::get('/pay', [PayController::class, 'index'])->name('pay');
Route::get('/pay/create', [PayController::class, 'create'])->name('pay.create');



Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce');
Route::get('product-detail/{id}/{title}', [EcommerceController::class, 'show'])->name('product-detail');