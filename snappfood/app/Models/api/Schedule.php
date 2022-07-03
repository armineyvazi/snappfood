<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Schedule extends Model
{


    use HasFactory;

    protected $fillable = array(
            'id',
            'saturday',
            'sunday',
            'monday',
            'thuesday',
            'wednesday',
            'thursday',
            'friday',
            'restaurantowner_id',


    );
    protected $hidden='restaurantowner_id';

    public function resturant()
    {
        return $this->belongsTo(App\Models\resturantowner\Restaurantowner::class,'restaurantowner_id','id');
    }
}
