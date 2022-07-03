<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\api\Schedule;

class ResturantsResourse extends JsonResource
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
            $data=[
                "id"=>$this->id,
                "title"=>$this->name,
                "type"=>$this->resturantcategory,
                'address'=>["address"=> $this->address,
                  "latitude"=> $this->latitude,
                  "longitude"=>$this->longitude
                ],
                "is_open"=> $this->isopen,
                "image"=>"https://picsum.photos/200/300",
                "score"=>$this->score,
                "comments_count"=> 493,
                "schedule"=>SheduleResourse::collection(Schedule::where('restaurantowner_id',$this->id)->get()),

            ],
            
        ];
    }
}
