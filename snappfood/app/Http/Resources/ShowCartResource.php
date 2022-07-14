<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowCartResource extends JsonResource
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
            "id" => $this->id,
            "restaurantowner_id" => $this->restaurantowner_id,
            "resturant_foods_id" => $this->resturant_foods_id,
             "user_id" => $this->user_id,
             "count" => $this->count,


        ];
    }
}
