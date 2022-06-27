<?php

namespace App\Models\resturantowner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurantowner extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'phone',
        'city',
        'loc:x',
        'loc:y',
    ];
    use HasFactory;
}
