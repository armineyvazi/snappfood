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
        return [
            'id'=>$this->id,
            'title'=>$this->name,
            'price'=>$this->price*$this->count,
            'count'=>$this->count,
        ];
    }
}
