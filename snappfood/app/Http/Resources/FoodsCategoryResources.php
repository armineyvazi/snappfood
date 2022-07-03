<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\resturantowner\ResturantFoods;

class FoodsCategoryResources extends JsonResource
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
            'cattegory'=>[
                "id"=>$this->id,
                "title"=>$this->name,
            ],
            'foods'=>FoodsResources::collection(ResturantFoods::where('restaurantowner_id',$this->id)->get()),

        ];
    }
}
