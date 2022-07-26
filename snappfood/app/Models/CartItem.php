<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'carts_id',
        'user_id',
        'resturant_foods_id',
        'count',
        'price_cart_items',
        'foods_name',
    ];
}
