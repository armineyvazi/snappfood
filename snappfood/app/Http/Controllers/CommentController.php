<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentsRequest;
use App\Models\api\Carts;
use App\Models\Comment;

class CommentController extends Controller
{

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
