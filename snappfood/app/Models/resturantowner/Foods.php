<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{   use HasFactory;
    protected $fillable=[
        'id',
        'foods_category_id',
        'resturants_id',
        'name',
        'description',

    ];


}
