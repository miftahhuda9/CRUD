<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken epxtends Middleware
{

    protected $addHttpCookie = true;

   protected $except = [
    'cart/item',
    'cart/items',
];
}