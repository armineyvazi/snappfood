<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'carts_id',
        'restaurantowner_id',
        'resturant_foods_id',
        'user_id',
        'price',
        'total',
        'count',
        'foods_name',
        'name',
        'comments',
        'score',
        'report',
        'answer',
        'phone',
        'email',
        'orders_status',
    ];

}
