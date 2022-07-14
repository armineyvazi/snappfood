<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\resturantowner\Restaurantowner;
use App\Models\resturantowner\ResturantFoods;
class Carts extends Model
{
    use HasFactory;


    public function restaurantowner()
    {
        return $this->belongsTo(Restaurantowner::class);
    }
    public function cartsfood()
    {
        return $this->hasMany(ResturantFoods::class);
    }
}
