<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\Orders;
use App\Models\CartItem;
use App\Models\api\Carts;
use App\Http\Controllers\Controller;
use App\Http\Requests\PayCartRequest;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Http\Resources\ShowCartResource;
use App\Models\resturantowner\ResturantFoods;
use App\Http\Resources\CartsControllerResource;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts=Carts::where('user_id', auth()->user()->id)->get();

        return $carts ? CartsControllerResource::collection($carts) :response(['msg'=>'NOT FOUND']);
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
    public function store(StoreCartRequest $request, Carts $cart)
    {
        $fields=$request->validated();

        $foods=ResturantFoods::where('id', $fields['foods_id'])->first();

        $cart_id=Carts::where('restaurantowner_id', $foods->restaurantowner_id)->first() ??false;

        $checkIsSetFood=CartItem::where('resturant_foods_id', $fields['foods_id'])->first() ??false;

        if (isset($cart_id->restaurantowner_id)!= $foods->restaurantowner_id) {
            $cart_data=[
            'restaurantowner_id'=>$foods->restaurantowner_id,
            'user_id'=>auth()->user()->id,
            'ispay'=>false,
            ];
            $cart_id=Carts::create($cart_data)->id;
        }
        if ($checkIsSetFood==false) {
            $data=[
            'user_id'=>auth()->user()->id,
            'carts_id'=>$cart_id->id ?? $cart_id,
            'resturant_foods_id'=>$fields['foods_id'],
            'count'=>$fields['count'],
            'foods_name'=>$foods->name,
            'price_cart_items'=>(int)$foods->price*(int)$fields['count'],
            ];

            CartItem::create($data);
        } else {
            return response(['msg'=>'Food exist']);
        }
        $message=[
            'msg'=>"food added to cart successfully",
            'cart_id'=>$cart_id->id ?? $cart_id,
        ];

        return response($message, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Carts::find($id);

        return $data ? ShowCartResource::make($data) : response(['msg'=>'food not found']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
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
     * http://localhost:8000/api/v1/carts/id
     */
    public function update(UpdateCartRequest $request, $id)
    {
        $fields=$request->validated();

        $exist=ResturantFoods::find($fields['foods_id'])?->get();

        $exist_cart_item=CartItem::where('resturant_foods_id', $fields['foods_id'])?->get();

        $data=[
            'resturant_foods_id'=>$fields['foods_id'],
            'count'=>$fields['count'],
        ];

        if ($exist==null || $exist_cart_item==null) {
            return response(['This food does not exist']);
        }

        CartItem::where('resturant_foods_id', $fields['foods_id'])->update($data);

        return response(['msg'=>'Your cart has been updated successfully'], 200);
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
     *http://localhost:8000/api/v1/carts/cart_id/pay
     */
    public function pay(PayCartRequest $request)
    {
        $field=$request->validated();

        $cart=Carts::where('user_id', auth()->user()->id)->where('ispay', false)->where('id', $field['cart_id'])->first();

        $user=User::where('id', auth()->user()->id)->first();

        $order=Orders::where('user_id', auth()->user()->id)->where('restaurantowner_id',$cart->restaurantowner_id)?->first();

        $cartItem=CartItem::where('carts_id', $field['cart_id'])->get();

        $foodsPrice=0;

        foreach ($cartItem as $key =>$value) {

            $foodsName[]=$value['foods_name'];
            $foodsPrice+=(int)$value['price_cart_items'];
            $foodsCount[]=$value['count'];
        }
        $foodsName=implode(',', $foodsName);
        $foodsCount=implode(',', $foodsCount);

        if (is_null($order))
        {
            $data=array_merge([
            'carts_id'=>$cart->id,
            'restaurantowner_id'=> $cart->restaurantowner_id,
            'resturant_foods_id'=>$cartItem[0]->resturant_foods_id,
            'foods_name'=>$foodsName,
            'total'=>$foodsPrice,
            'user_id'=>auth()->user()->id,
            'count'=>$foodsCount,
            'name'=>$user->name,
            'email'=>$user->email,
            'phone'=>$user->phone,
            'orders_status'=>'Pending',
            ]);
            Orders::create($data);
            Carts::where('user_id', auth()->user()->id)->where('restaurantowner_id',$cart->restaurantowner_id)->update(['ispay'=>true]);
        return response(['msg'=>'your order has been created successfully']);
        }
        else
            return response(['msg'=>'Your order is save']);
        }
}
