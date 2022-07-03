<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SheduleResourse extends JsonResource
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
            "schedule"=>[
                "saturday"=>[
                    "start"=>$this->saturday,
                    "end"=> "23:00"
                ],
                  "sunday"=>[
                    "start"=> $this->sunday,
                    "end"=>"23:00"
                  ],
                  "monday"=>[
                    "start"=> $this->monday,
                    "end"=>"23:00"
                  ],
                  "thusday"=> [
                    "start"=> $this->thuesday,
                    "end"=> "23:00"
                  ],
                  "wednesday"=>[
                    "start"=> $this->wednesday,
                    "end"=>"23:00"
                  ],
                  "thursday"=> [
                    "start"=> $this->thursday,
                    "end"=>"23:00"
                  ],
                  "friday"=> null
                ],
        
            ];
    }
}
