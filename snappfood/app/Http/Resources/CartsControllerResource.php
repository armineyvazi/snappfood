<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\resturantowner\ResturantFoods;

class CartsControllerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

                    'id'=>$this->id,
                    'restaurtant'=>
                    [
                        'title'=>$this->restaurantowner->name,
                        'image'=>'https://picsum.photos/200/300',
                    ],
                    'foods'=>FoodsCartResources::collection(ResturantFoods::where('restaurantowner_id',$this->restaurantowner_id)->with('foodscart')->get()),


                    'created_at'=>$this->created_at,
                    'updated_at'=>$this->updated_at,



                ];
    }
}
