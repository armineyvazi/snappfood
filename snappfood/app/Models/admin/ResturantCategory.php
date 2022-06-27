<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantCategory extends Model
{
    protected $fillable=[
        'id',
        'name',

    ];
    use HasFactory;
}
