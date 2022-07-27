<?php

namespace App\Http\Controllers\resturantowner;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\FoodsCategory;
use App\Http\Requests\UpdateCommentRequest;

class CustomerReviewsController extends Controller
{
    public function index()
    {
        $resturant_id=User::find(auth()->user()->id)->resturant->id;

        $category=FoodsCategory::paginate();

        $comment=Comment::where('restaurantowner_id',$resturant_id)?->get();

        return view('resturant.comment.commentindex',compact('comment','category'));
    }

    public function update(UpdateCommentRequest $request)
    {
        $id=$request->validated()['id'];
        $message=$request->validated()['reply'];
        $data=[
            'answer'=>$message,
        ];
        comment::find($id)->update($data);
        return redirect('restaurantowners/customerreviews')->with(['message'=>'Answer is saved']);
    }
}
