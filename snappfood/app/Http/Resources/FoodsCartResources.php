<?php

namespace App\Http\Resources;

use App\Models\api\Carts;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodsCartResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //dd(Carts::where('resturant_foods_id',$this->id)->get()->count);
        return [
            'id'=>$this->id,
            'title'=>$this->name,
            'count'=>$this->foodscart[0]->count,
            'price'=>$this->price*1,
        ];
    }
}
