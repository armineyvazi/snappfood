<?php

namespace App\Http\Controllers\resturantowner;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\FoodsCategory;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\resturantowner\ResturantFoods;

class CustomerReviewsController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('is_restaurant');
        $comment=[];

        $nameFood=[];


        $resturant_id=User::find(auth()->user()->id)->resturant->id;

        $category=ResturantFoods::paginate();

        $search=$request->all()['food'] ?? false;

        if(($search)==='000'){//bad score

            $comment=Comment::where('score', '<=', 2)->where('restaurantowner_id', $resturant_id)?->get();
        }
        if(($search)==='00'){//good score

            $comment=Comment::where('score','>=',3)->where('restaurantowner_id',$resturant_id)?->get();
        }
        if(($search)>0 ){

           $nameFood=ResturantFoods::where('id',$search)->where('restaurantowner_id',$resturant_id)?->first()->name ?? false;

           $nameFood ? $comment=Comment::where('foodName','REGEXP',$nameFood.',.+')->where('restaurantowner_id',$resturant_id)?->get():$comment=[];

        }
        if(($search)=='all'){

            $comment=Comment::where('restaurantowner_id',$resturant_id)?->get();
        }
        return view('resturant.comment.commentindex',compact('comment','category'));
    }

    public function update(UpdateCommentRequest $request)
    {
        $this->authorize('is_restaurant');
        
        $report=$request->validated()['report']??null;

        $id=$request->validated()['id'];

        $message=$request->validated()['reply']??null;

        $data=[
            'answer'=>$message,
        ];
        if (!is_null($report))
        {
            comment::find($id)->update(['report'=>true]);
            return redirect('restaurantowners/customerreviews')->with(['message'=>'Comment is report']);
        }
        if(!is_null($message))
        {
            comment::find($id)->update($data);
            return redirect('restaurantowners/customerreviews')->with(['message'=>'Answer is saved']);
        }
    }
}
