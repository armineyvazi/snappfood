<?php

namespace App\Models\resturantowner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Restaurantowner extends Model
{
    use HasApiTokens;
    use HasFactory;

   // protected $table = 'restaurantowners';
   // protected $hidden='user_id';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'resturantcategory',
        'address',
        'isopen',
        'score',
        'comments_count',
        'accountnumber',
        'phone',
        'city',
        'latitude',
        'longitude',
    ];
    //blongto
    //has one to week
    public function user()
    {
       return $this->belongsTo(App\Models\Users::class);
    }
    public function shedules()
    {
       return $this->hasMany(App\Models\api\Schedule::class,'restaurantowner_id','id');
    }
    public function foods()
    {
        return $this->hasMany(App\Models\resturantowner\ResturantFoods::class,'restaurantowner_id');
    }

    // public function week()
    // {
    //     $this->hasOne(App\Models::class);
    // }
}
