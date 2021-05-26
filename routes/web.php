<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('cart', [ProductController::class, 'cart']);
Route::patch('add-to-cart/{id}', [ProductController::class, 'addToCart']);

Route::patch('update-cart', [ProductController::class, 'updateCart']);
Route::delete('remove-from-cart', [ProductController::class, 'removeCart']);

Route::resource('products', ProductController::class);
