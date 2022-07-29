<?php

namespace App\Http\Controllers\api;

use App\Models\api\Schedule;
use Illuminate\Http\Request;
use App\Models\admin\FoodsCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResturantsResourse;
use App\Models\resturantowner\ResturantFoods;
use App\Http\Resources\FoodsCategoryResources;
use App\Models\resturantowner\Restaurantowner;
use App\Http\Requests\RestaurantSearchApiRequest;


class Restaurants extends Controller
{
    public function index($id)
    {
        $dataRestaurant=Restaurantowner::where('id',$id)->get()?->first()??null;

        return $dataRestaurant ? ResturantsResourse::make($dataRestaurant):response(['mes'=>'Not found']);

    }
    public function search(RestaurantSearchApiRequest $request,Restaurantowner $restaurantowner)
    {
        $data=[];
        $isOpen=$request->validated()['is_open'] ?? false;
        $type=$request->validated()['type'] ??  false;
        $score=$request->validated()['score_gt']  ?? false;

        if (($isOpen)) {

            $data=$restaurantowner->where('isopen','=',$isOpen)?->get()??false;

        }
        if (($type)) {

            $data=$restaurantowner->where('resturantcategory','=',$type)?->get()??false;

        }
        if (($score)) {

            $data=$restaurantowner->where('score', '>=', $score)?->get()??false;


        }
        // use laravel local scopes

        return ($data) ? response($data, 200):response(['msg'=>'not found']);
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
