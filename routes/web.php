<?php

use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

