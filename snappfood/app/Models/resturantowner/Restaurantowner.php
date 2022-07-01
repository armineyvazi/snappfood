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
    public function resturant()
    {
        $this->belongsTo(App\Models\Users::class);
    }

    // public function week()
    // {
    //     $this->hasOne(App\Models::class);
    // }
}
