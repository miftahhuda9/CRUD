<?php

use App\Http\Controllers\CartController;

Route::post('/cart/item', [CartController::class, 'addItem']);
Route::post('/cart/items', [CartController::class, 'addItems']);
Route::get('/cart/item/{id}', [CartController::class, 'getItem']);
Route::get('/cart/items', [CartController::class, 'getItems']);
Route::delete('/cart/item/{id}', [CartController::class, 'deleteItem']);
Route::delete('/cart/items', [CartController::class, 'deleteItems']);
Route::put('/cart/item/{id}', [CartController::class, 'updateItem']);
