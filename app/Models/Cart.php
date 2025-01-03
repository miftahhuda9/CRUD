<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cart extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'carts';

    protected $fillable = ['name', 'quantity', 'price'];

    public static $rules = [
        'name' => 'required|string|max:99',
        'quantity' => 'required|integer|max:99',
        'price' => 'required|integer|min:1',
    ];
}