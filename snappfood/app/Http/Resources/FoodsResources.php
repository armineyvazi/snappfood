<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodsResources extends JsonResource
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
            'price'=> $this->price,
            'off'=>[
                'label'=>$this->discounts,
                'factor'=>'=-=-=-=-=-=',
            ],
            'raw_material'=>$this->rawmaterial,
            'image'=>$this->image,
         ];



    }
}
