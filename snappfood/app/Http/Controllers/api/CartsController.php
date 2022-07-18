<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartsControllerResource;
use App\Http\Resources\ShowCartResource;
use App\Models\api\Carts;
use App\Http\Requests\PayCartRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\resturantowner\ResturantFoods;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Orders;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts=Carts::where('user_id',auth()->user()->id)->with('restaurantowner')->get();

        if(!($carts->isEmpty()))

         return CartsControllerResource::collection($carts);

        return response(['msg'=>'NOT FOUND']);

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
            'user_id'=>auth()->user()->id,
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
    public function show($id): \Illuminate\Http\Response
    {
        $data=Carts::find($id);

        if(is_null($data))
          return response(['msg'=>'food not found']);

        return ShowCartResource::make($data);
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
        Carts::where('user_id',auth()->user()->id)->update($data);

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
    /**
     * pay for cart
     *
     *@param ind $cart_id
     *@return \Illuminate\Http\Response
     */
    public function pay(PayCartRequest $request)
    {
        $filed=$request->validated();
        $data=Carts::find($filed['cart_id']);
        $foods=ResturantFoods::find($data['resturant_foods_id']);
        $user=User::where('id',$data['user_id'])->get()->first();
        if (Orders::where('carts_id', $filed['cart_id'])->get()->first()==null) {
            $order=[
            'carts_id'=>$data['id'],
            'restaurantowner_id'=> $data['restaurantowner_id'],
            'resturant_foods_id'=>$data['resturant_foods_id'],
            'foods_name'=>$foods->name,
            'price'=>$foods->price,
            'sum'=>$foods->price*$data['count'],
            'user_id'=>$data['user_id'],
            'count'=>$data['count'],
            'name'=>$user->name,
            'email'=>$user->email,
            'phone'=>$user->phone,
            'orders_status'=>'Pending',

        ];
            Orders::create($order);
            return response(['msg'=>'your order has been created successfully']);
        }
        else
            return response(['msg'=>'Your order is save']);

    }
}
