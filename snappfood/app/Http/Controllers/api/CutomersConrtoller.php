<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\UpdateCustomerController;
use App\Models\User;

use App\Models\api\Customer;


class CutomersConrtoller extends Controller
{
    public function update(UpdateCustomerController $request,User $users)
    {
        //user controller
        $fields = $request->validated();

        $user=[
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
            'phone'=>$fields['phone'],
        ];

        $users->where('email',$fields['email'])
                        ->update($user);

     return response(['msg' => 'User has been updated successfully'],200);

    }
}
