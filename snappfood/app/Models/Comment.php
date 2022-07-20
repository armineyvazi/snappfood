<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'restaurantowner_id',
        'resturant_foods_id',
        'carts_id',
        'user_id',
        'report',
        'answer',
        'message',
        'score',
    ];
}
