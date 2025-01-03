<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
	protected $collection = 'posts';

    protected $fillable = [
        'id', 'name', 'detail'
    ];
}