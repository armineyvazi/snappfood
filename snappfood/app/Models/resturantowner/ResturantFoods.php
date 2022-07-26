<?php

namespace App\Models\resturantowner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\resturantowner\ResturantOwner;
use App\Models\api\Carts;
class ResturantFoods extends Model
{
    use HasFactory;

    protected $table='foods';

    protected $fillable = [
        'id',//id of food
        'restaurantowner_id',//which restaurant owner
        'name', //name of food
        'foodsparty',
        'rawmaterial',//rawmaterial of food
        'price',// price of food
        'image',//image of food
        'foodscategory',//which category of food
        'discounts',//discounts of food

    ];
    public function resturants()
    {
        return $this->hasOne(Restaurantowner::class,'id','restaurantowner_id');
    }
    public function foodscart()
    {
        return $this->hasMany(Carts::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
