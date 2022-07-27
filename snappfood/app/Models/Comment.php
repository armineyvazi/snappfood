<?php

namespace App\Models;

use App\Models\resturantowner\ResturantFoods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'restaurantowner_id',
        'carts_id',
        'user_id',
        'report',
        'name',
        'foodName',
        'answer',
        'message',
        'score',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function foods()
    {
        return $this->belongsTo(ResturantFoods::class,'resturant_foods_id','id');
    }
}
