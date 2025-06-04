<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);

Route::get('/checkout', function () {
    return view('checkout');
});

Route::resource('products', ProductsController::class);
