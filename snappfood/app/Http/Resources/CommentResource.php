<?php

namespace App\Http\Resources;

use App\Models\Comment;
use App\Models\CartItem;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'author'=>[
                'name'=>$this->user->name,
            ],
            'food'=>FoodsCommentResource::collection(CartItem::where('carts_id',$this->carts_id)->get()),
            'create_at'=>$this->created_at,
            'score'=>$this->score,
            'content'=>$this->message,
            'answer'=>$this->answer,
        ];
    }
}
