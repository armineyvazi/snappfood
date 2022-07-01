<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\resturantowner\Restaurantowner;
use App\Models\admin\FoodsCategory;
use App\Models\api\Schedule;
use App\Models\resturantowner\ResturantFoods;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class Restaurants extends Controller
{
    public function getRestaurants($id){
      $dataRestaurant=Restaurantowner::where('id',$id)->get()->first();

      $shedule=Schedule::where('restaurantowner_id',$id)->get()->first();


      $data=[
        "id"=>$dataRestaurant->id,
        "title"=>$dataRestaurant->name,
        "type"=>$dataRestaurant->resturantcategory,
        'address'=>["address"=> $dataRestaurant->address,
          "latitude"=> $dataRestaurant->latitude,
          "longitude"=>$dataRestaurant->longitude
        ],
        "is_open"=> $dataRestaurant->isopen,
        "image"=>"https://picsum.photos/200/300",
        "score"=>$dataRestaurant->score,
        "comments_count"=> 493,
        "schedule"=>[
            "saturday"=>[
                "start"=>"$shedule->saturday",
                "end"=> "23:00"
            ],
              "sunday"=>[
                "start"=> "$shedule->sunday",
                "end"=>"23:00"
              ],
              "monday"=>[
                "start"=> "$shedule->monday",
                "end"=>"23:00"
              ],
              "thusday"=> [
                "start"=> "$shedule->thuesday",
                "end"=> "23:00"
              ],
              "wednesday"=>[
                "start"=> "$shedule->wednesday",
                "end"=>"23:00"
              ],
              "thursday"=> [
                "start"=> "$shedule->thursday",
                "end"=>"23:00"
              ],
              "friday"=> null
        ]
      ];


      return response($data,200);

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
        $data = $query->get();

        return response($data, 200);
    }
    public function getResturantFoods($id)
    {
      $dataRestaurant=Restaurantowner::where('id',$id)->get()->first();
      $foods=ResturantFoods::where('restaurantowner_id',$id)->get();
      $foodsCategoryTable=FoodsCategory::where('id',$foods[0]->id)->get()->first();
        $data=  [
            'cattegory'=>[
                    "id"=>$foodsCategoryTable->id,
                    "title"=>$foodsCategoryTable->name,
                    ]];

                  for ($i=0;$i<count($foods);$i++) {
                      $data[]=['foods'=>[
                        'id'=>$foods[$i]->id,
                        'title'=>$foods[$i]->name,
                        'price'=> $foods[$i]->price,
                        'off'=>[
                            'label'=>$foods[$i]->discounts,
                            'factor'=>'=-=-=-=-=-=',
                        ],
                        'raw_material'=>$foods[$i]->rawmaterial,
                        'image'=>$foods[$i]->image,
                    ],
                ];
            }


        return response($data,200);
    }

}
