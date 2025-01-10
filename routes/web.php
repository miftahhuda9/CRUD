<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cart/item', [CartController::class]);
Route::post('/cart/items', [CartController::class]);
Route::get('/cart/item/{id}', [CartController::class]);
Route::get('/cart/items', [CartController::class]);
Route::delete('/cart/item/{id}', [CartController::class]);
Route::delete('/cart/items', [CartController::class]);
Route::put('/cart/item/{id}', [CartController::class});
