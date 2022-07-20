<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=[
        'tittle',
        'address',
        'latitude',
        'iscurrent_address',
        'longitude',
        'user_id',

    ];


}
