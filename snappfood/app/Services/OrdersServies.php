<?php

namespace App\Services;
use App\Jobs\DeleveryJob;
use App\Jobs\PendingJob;
use App\Jobs\SendJob;
use App\Jobs\WaitJob;
use App\Mail\Delevery;
use App\Mail\Send;
use App\Mail\Wait;
use App\Mail\Pending;
use App\Models\Orders;
use App\Models\Archive;
use Illuminate\Support\Facades\Mail;
class OrdersServies
{
    public function updateOrders($switch,$email,$id,$orders_status)
    {
        $cart=Orders::find($id)->first();

        switch ($switch) {
            case 'pending':
                dispatch(new PendingJob($email))->delay(now()->addSeconds(33));
                break;

            case 'wait':
                dispatch(new WaitJob($email))->delay(now()->addSeconds(33));
                break;
            case 'send':
                dispatch(new SendJob($email))->delay(now()->addSeconds(33));
                break;

            case 'delivered':

                $data=[
                    'carts_id'=>$cart->carts_id,
                    'orders_id'=>$cart->id,
                    'name'=>$cart->name,
                    'restaurantowner_id'=>$cart->restaurantowner_id,
                    'user_id'=>$cart->user_id,
                    'foods_name'=>$cart->foods_name,
                    'total'=>$cart->total,
                    'count'=>$cart->count,
                    'phone'=>$cart->phone,
                    'email'=>$cart->email,
                    'resturant_foods_id'=>$cart->resturant_foods_id,
                    'orders_status'=>$cart->orders_status,
                ];
                Archive::create($data);
                Orders::where('id',$cart->id)->delete();
                dispatch(new DeleveryJob($email))->delay((now()->addSeconds(33)));
                break;
        }

        orders::where('id',$id)->update($orders_status);
    }



}
