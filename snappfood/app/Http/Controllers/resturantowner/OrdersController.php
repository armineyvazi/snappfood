<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrdersRequest;

class OrdersController extends Controller
{
    public function create()
    {
        $orders=Orders::all();
        return view('resturant.orders.dashboardorders',compact('orders'));
    }
    public function update(UpdateOrdersRequest $request)
    {
         
        orders::where('id',$request->get('id'))->update($request->only('orders_status'));
        return redirect('restaurantowners/orders')->with(["message"=>'Order status updated successfully']);
    }
}
