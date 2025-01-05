<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

Route::get('/',    [DashboardController::class, 'index'])->name('dashboard');


Route::get('/pay', [PayController::class, 'index'])->name('pay');
Route::get('/pay/create', [PayController::class, 'create'])->name('pay.create');