<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\resturantowner\Restaurantowner;
use App\Services\OrdersServies;
use App\Models\User;


class OrdersController extends Controller
{
    public function create()
    {

        $resturant_id=User::find(auth()->user()->id)->resturant->id;

        $orders=Orders::where('restaurantowner_id',$resturant_id)->get();

        return view('resturant.orders.dashboardorders',compact('orders'));
    }
    public function update(UpdateOrdersRequest $request,OrdersServies $orderServies)
    {
        $id=$request->get('id');
        $switch=$request->get('orders_status');
        $email=$request->get('email');
        $order_Status=$request->only('orders_status');
        $orderServies->updateOrders($switch,$email,$id,$order_Status);

        return redirect('restaurantowners/orders')->with(["message"=>'Order status updated successfully']);
    }
}
