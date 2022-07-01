<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\api\Address;


class AddressController extends Controller
{

    public function store(Request $request)
    {
        $fields = $request->validate([
            'tittle'=>'required',
            'address'=>'required|string',
            'latitude'=>'required',
            'longitude'=>'required',

        ]);
        Address::where('customer_id',auth()->user()->id)->update(['iscurrent_address'=>false]);

        Address::create([
            'tittle'=>$fields['tittle'],
            'customer_id'=>auth()->user()->id,
            'iscurrent_address'=>true,
            'address'=>$fields['address'],
            'latitude'=>$fields['latitude'],
            'longitude'=>$fields['longitude'],
        ]);


    return response(['msg'=>'address added successfully' ],201);

    }
    public function setCurrentAddress(Request $request)
    {
        $fields = $request->validate(['id'=>'required',]);

        $id=$fields['id'];

        Address::where('customer_id',$id)->update(['iscurrent_address'=>false]);

        Address::where('id',$id)->update(['iscurrent_address'=>true]);

        return response(["msg" =>"current address updated successfully"  ]);

    }

}
