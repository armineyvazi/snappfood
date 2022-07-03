<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\UpdateCustomerController;

use App\Models\api\Customer;


class CutomersConrtoller extends Controller
{
    public function update(UpdateCustomerController $request,Customer $customers)
    {
        //user controller
        $fields = $request->validated();

        $customer=[
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
            'phone'=>$fields['phone'],
        ];

        $customers->where('email',$fields['email'])
                        ->update($customer);

     return response(['msg' => 'Customer update'],200);

    }
}
