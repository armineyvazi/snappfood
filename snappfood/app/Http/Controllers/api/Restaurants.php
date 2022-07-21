<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FoodsCategoryResources;
use App\Http\Resources\ResturantsResourse;
use App\Models\resturantowner\Restaurantowner;
use App\Models\admin\FoodsCategory;
use App\Models\api\Schedule;
use App\Models\resturantowner\ResturantFoods;
use Illuminate\Http\Request;


class Restaurants extends Controller
{
    public function index($id)
    {
      $dataRestaurant=Restaurantowner::where('id',$id)->get()->first();

      if($dataRestaurant==null)
        return response(['mes'=>'Not found']);

    return ResturantsResourse::make($dataRestaurant);

    }
    public function search(Request $request)
    {
        $query = Restaurantowner::query();

        if (!is_null($request->isopen)) {
            $query->where('isopen', $request->isopen);
        }
        if (!is_null($request->type)) {
            $query->where('resturantcategory', $request->type);
        }
        if (!is_null($request->score)) {
            $query->where('score', '>=', $request->score);
        }

        // use laravel local scopes
        $data = $query->get();

        return response($data, 200);
    }
    public function resturantsFood($id)
    {
    $foods=ResturantFoods::where('restaurantowner_id',$id)->get();

      if(!isset($foods[0]->id))
        return response(['msg'=>'not found']);

    $foodsCategoryTable=FoodsCategory::where('id',$foods[0]->id)->get()->first();

     return FoodsCategoryResources::make($foodsCategoryTable);
    }

}
