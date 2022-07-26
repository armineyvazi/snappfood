<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentsRequest;
use App\Http\Requests\IndexCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\api\Carts;
use App\Models\Comment;
use App\Models\resturantowner\ResturantFoods;

class CommentController extends Controller
{
    public function index(IndexCommentRequest $request)
    {
        $fields=$request->validated();

        if(isset($fields['food_id']))
        {
           $restaurant_id=ResturantFoods::where('id',$fields['food_id'])->with('resturants')->first();

           $comment=Comment::where('restaurantowner_id',$restaurant_id->restaurantowner_id)->with('user','foods')->get();//model

           return !($comment->isEmpty()) ? CommentResource::collection($comment):response(['msg'=>'Not found']);

        }
        else if(isset($fields['restaurant_id']))
        {

           $comment=Comment::where('restaurantowner_id',$fields['restaurant_id'])->with('user','foods')?->get();

           return !($comment->isEmpty()) ? CommentResource::collection($comment):response(['msg'=>'Not found']);

        }


    }
    public function store(StoreCommentsRequest $request)
    {
        $feilds=$request->validated();

        $cart=Carts::where('id',$feilds['cart_id'])->where('ispay',1)?->first();

        if (!is_null($cart)) {

            $data=[
            'user_id'=>auth()->user()->id,
            'restaurantowner_id'=>$cart->restaurantowner_id,
            'carts_id'=>$cart->id,
            'report'=>0,
            'answer'=>'',
            'message'=>$feilds['message'],
            'score'=>$feilds['score'],
                ];
            Comment::create($data);

            return response(['msg'=>'comment created successfully'], 200);
        }
        return response(['msg'=>'Sorry! Something went wrong! Please try again.'], 200);
    }
}
