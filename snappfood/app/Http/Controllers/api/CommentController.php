<?php

namespace App\Http\Controllers\api;

use App\Models\Comment;
use App\Models\CartItem;
use App\Models\api\Carts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Requests\IndexCommentRequest;
use App\Http\Requests\StoreCommentsRequest;
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
        $cart=Carts::where('user_id', auth()->user()->id)->where('ispay', true)->where('id', $feilds['cart_id'])?->first();
        $cartItem=CartItem::where('carts_id', $feilds['cart_id'])->get();

        foreach ($cartItem as $key =>$value) {

            $foodsName[]=$value['foods_name'];
        }
        $foodsName=implode(',', $foodsName);

        if (!is_null($cart)) {

            $data=[
            'user_id'=>auth()->user()->id,
            'restaurantowner_id'=>$cart->restaurantowner_id,
            'carts_id'=>$cart->id,
            'report'=>0,
            'foodName'=>$foodsName,
            'name'=>$cart->user->name,
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
