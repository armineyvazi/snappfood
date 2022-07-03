<?php

namespace App\Http\Controllers\api;

use App\Models\api\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAuthRequest;
use App\Http\Requests\LoginAuthRequest;
use BaconQrCode\Renderer\Path\Curve;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterAuthRequest $request)
    {
        $fields = $request->validated();

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

    public function login(LoginAuthRequest $request,Customer $customers)
    {

        $fields = $request->validated();

        //Check Email
        $customer=$customers->where('email',$fields['email'])->first();

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

        return response($response,200);
    }

}
