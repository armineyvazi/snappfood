<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartsControllerResource;
use App\Models\api\Carts;
use App\Models\resturantowner\ResturantFoods;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts=Carts::where('user_id',1)->with('restaurantowner')->get();

        return CartsControllerResource::collection($carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request,Carts $cart)
    {
        $fields=$request->validated();

        $data=[
            'restaurantowner_id'=>ResturantFoods::where('restaurantowner_id',$fields['foods_id'])->first()->id,
            'resturant_foods_id'=>$fields['foods_id'],
            'user_id'=>1,
            'count'=>$fields['count'],

        ];

        $id=$cart->create($data)->id;

        $message=[
            'msg'=>"food added to cart successfully",
            'cart_id'=>$id
        ];

        return response($message,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request,$id)
    {
        $fields=$request->validated();
        $data=[
            'resturant_foods_id'=>$fields['foods_id'],
            'count'=>$fields['count'],
        ];
        Carts::where('user_id',1)->update($data);

       return response(['msg'=>'Your cart has been updated successfully'],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
