<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\resturantowner\Restaurantowner;
use App\Models\resturantowner\ResturantFoods;
class Carts extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'restaurantowner_id',
        'user_id',
        'resturant_foods_id',
        'count',
    ];

    public function restaurantowner()
    {
        return $this->belongsTo(Restaurantowner::class);
    }
    public function cartsfood()
    {
        return $this->hasMany(ResturantFoods::class);
    }
}
