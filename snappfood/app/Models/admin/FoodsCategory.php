<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodsCategory extends Model
{
    use HasFactory;
  

    protected $fillable=[
        'id',
        'name',

    ];



}
