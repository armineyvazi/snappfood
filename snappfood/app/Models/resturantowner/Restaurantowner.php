<?php

namespace App\Models\resturantowner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurantowner extends Model

{   use HasFactory;
    protected $table = 'restaurantowners';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'resturantcategory',
        'address',
        'isopen',
        'accountnumber',
        'phone',
        'city',
        'loc:x',
        'loc:y',
    ];

}
