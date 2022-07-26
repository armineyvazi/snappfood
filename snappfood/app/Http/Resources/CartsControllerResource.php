<?php

namespace App\Http\Resources;

use App\Models\CartItem;
use App\Http\Resources\FoodsCartResources;
use App\Models\resturantowner\ResturantFoods;
use Illuminate\Http\Resources\Json\JsonResource;

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
                    'foods'=>FoodsCartResources::collection(CartItem::where('user_id',auth()->user()->id)->get()),
                    'created_at'=>$this->created_at,
                    'updated_at'=>$this->updated_at,
                ];
    }
}
