<?php

namespace App\Models\api;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\resturantowner\ResturantFoods;
use App\Models\resturantowner\Restaurantowner;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carts extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'restaurantowner_id',
        'user_id',
        'ispay',
    ];

    public function restaurantowner()
    {
        return $this->belongsTo(Restaurantowner::class);
    }
    public function cartsfood()
    {
        return $this->hasMany(ResturantFoods::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
