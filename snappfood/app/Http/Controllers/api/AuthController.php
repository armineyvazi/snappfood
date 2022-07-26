<?php

namespace App\Http\Controllers\api;

use App\Models\api\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAuthRequest;
use App\Http\Requests\LoginAuthRequest;
use BaconQrCode\Renderer\Path\Curve;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterAuthRequest $request)
    {
        $fields = $request->validated();

        $customer=User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'isAdmin'=>0,
            'role'=>0,
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

    public function login(LoginAuthRequest $request,User $user)
    {
        $fields = $request->validated();

        //Check Email
        $user=$user->where('email',$fields['email'])->first();

        //Check Password
        if(!$user || !Hash::check($fields['password'],$user->password))
        {
            return response([
                'message'
                        =>'Bad login'

            ],401);
        }

        $token = $user->createToken('StringAccsessTokenFor')->plainTextToken;
        $response=[
            'user'=>$user,
            'token'=>$token,
        ];

        return response($response,200);
    }

}
