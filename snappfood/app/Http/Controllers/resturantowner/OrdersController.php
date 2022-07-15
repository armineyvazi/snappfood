<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrdersRequest;
use App\Mail\Delevery;
use App\Mail\Send;
use App\Mail\Wait;
use App\Mail\Pending;

use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function create()
    {
        $orders=Orders::all();
        return view('resturant.orders.dashboardorders',compact('orders'));
    }
    public function update(UpdateOrdersRequest $request)
    {

        $switch=$request->get('orders_status');
        $email=$request->get('email');

        /**
         * @param remember write helpers function.
         */

        switch ($switch) {
            case 'pending':
                Mail::to($email)->send(new  Pending );
                break;

            case 'wait':
                Mail::to($email)->send(new  Wait );
                break;

            case 'send':
                # code...
                Mail::to($email)->send(new  Send );
                break;

            case 'delivered':
                Mail::to($email)->send(new  Delevery );
                break;
        }


        orders::where('id',$request->get('id'))->update($request->only('orders_status'));

        return redirect('restaurantowners/orders')->with(["message"=>'Order status updated successfully']);
    }
}
