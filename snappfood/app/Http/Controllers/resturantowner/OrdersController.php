<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Http\Requests\UpdateOrdersRequest;
use App\Jobs\DeleveryJob;
use App\Jobs\PendingJob;
use App\Jobs\SendJob;
use App\Jobs\WaitJob;
use App\Mail\Delevery;
use App\Mail\Send;
use App\Mail\Wait;
use App\Mail\Pending;
use App\Models\Archive;
use App\Models\resturantowner\Restaurantowner;
use App\Services\OrdersServies;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function create()
    {
        $resturant_id=Restaurantowner::where('user_id',auth()->user()->id)->first();

        $orders=Orders::where('restaurantowner_id',$resturant_id->id)->get();

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
