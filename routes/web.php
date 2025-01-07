<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

Route::get('/',    [DashboardController::class, 'index'])->name('dashboard');


Route::get('/pay', [PayController::class, 'index'])->name('pay');
Route::get('/pay/create', [PayController::class, 'create'])->name('pay.create');



Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce');
Route::get('ecommerce/{id}/{title}', [EcommerceController::class, 'show'])->name('ecommerce.detail');


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
