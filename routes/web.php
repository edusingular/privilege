<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ExtratoController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pay', [PayController::class, 'index'])->name('pay');
    Route::get('/pay/create', [PayController::class, 'create'])->name('pay.create');


    Route::get('/extract', [ExtratoController::class, 'index'])->name('extrato');



    Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce');

    Route::get('/ecommerce/{id}/{title}', [EcommerceController::class, 'show'])->name('ecommerce.detail');

    Route::get('/category/{id}/{title}', [EcommerceController::class, 'showCategory'])->name('category');


    Route::get('/services', [ServicesController::class, 'index'])->name('services');


    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');


});





require __DIR__ . '/auth.php';
