<?php

namespace App\Http\Controllers\api;

use App\Models\api\Customer;
use App\Http\Controllers\Controller;
use BaconQrCode\Renderer\Path\Curve;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:customers,email',
            'phone'=>'required',
            'password'=>'required|string|confirmed',
        ]);
        $customer=Customer::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
            'phone'=>$fields['phone'],
        ]);
        $token = $customer->createToken('StringAccsessTokenFor')->plainTextToken;
        $response=[
            'customer'=>$customer,
            'token'=>$token,
        ];

        return response($response,201);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [

            'message'=>'Logged out'
        ];
    }

    public function login(Request $request)
    {

        $fields = $request->validate([

            'email'=>'required|string|email',
            'password'=>'required|string',
        ]);
        //Check Email
        $customer=Customer::where('email',$fields['email'])->first();

        //Check Password
        if(!$customer || !Hash::check($fields['password'],$customer->password))
        {
            return response([
                'message'
                        =>'Bad login'

            ],401);
        }


        $token = $customer->createToken('StringAccsessTokenFor')->plainTextToken;
        $response=[
            'customer'=>$customer,
            'token'=>$token,
        ];

        return response($response,201);

    }
    public function update(Request $request,$id)
    {
        $fields = $request->validate([
            'name'=>'required|string|unique:customers,email',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required|string|confirmed',
        ]);
        $customer=[
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
            'phone'=>$fields['phone'],
        ];

        Customer::where('email',$fields['email'])
                     ->update($customer);

     return response(['msg' => 'Customer update'],201);

    }


}
