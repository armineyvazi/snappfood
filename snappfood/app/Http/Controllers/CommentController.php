<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentsRequest;
use App\Http\Requests\IndexCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\api\Carts;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(IndexCommentRequest $request)
    {

        $fields=$request->validated();

        if(isset($fields['food_id']))
        {

           $comment=Comment::where('resturant_foods_id',$fields['food_id'])->with('user','foods')->get();
           return  CommentResource::collection($comment);

        }
        else if(isset($fields['restaurant_id']))
        {

           $comment=Comment::where('restaurantowner_id',$fields['restaurant_id'])->with('user','foods')->get();
           return  CommentResource::collection($comment);

        }

    }



    public function store(StoreCommentsRequest $request)
    {

        $feilds=$request->validated();
        $cart=Carts::find($feilds['cart_id']);


        $data=[
            'user_id'=>auth()->user()->id,
            'restaurantowner_id'=>$cart->restaurantowner_id,
            'resturant_foods_id'=>$cart->resturant_foods_id,
            'carts_id'=>$cart->id,
            'report'=>0,
            'answer'=>'',
            'message'=>$feilds['message'],
            'score'=>$feilds['score'],
        ];
        Comment::create($data);


        return response(['msg'=>'comment created successfully'],200);


    }




}
