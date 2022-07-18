<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    public $id;

    protected $fillable = [
        'id',
        'name',
        'orders_id',
        'carts_id',
        'restaurantowner_id',
        'user_id',
        'foods_name',
        'price',
        'sum',
        'count',
        'phone',
        'email',
        'resturant_foods_id',
        'orders_status',
    ];


}
