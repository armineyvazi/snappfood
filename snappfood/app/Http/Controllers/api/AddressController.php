<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAddressRequest;
use App\Models\api\Address;


class AddressController extends Controller
{

    public function store(StoreAddressRequest $request,Address $address)
    {

        $fields = $request->validated();

        $address->where('customer_id',auth()->user()->id)->update(['iscurrent_address'=>false]);

        $address->create([
            'tittle'=>$fields['tittle'],
            'customer_id'=>auth()->user()->id,
            'iscurrent_address'=>true,
            'address'=>$fields['address'],
            'latitude'=>$fields['latitude'],
            'longitude'=>$fields['longitude'],
        ]);


     return response(['msg'=>'address added successfully' ],201);

    }
    public function update(Request $request,Address $address)
    {
        $fields = $request->validate(['id'=>'required']);

        $id=$fields['id'];

        $address->where('customer_id',$id)->update(['iscurrent_address'=>false]);

        $address->where('id',$id)->update(['iscurrent_address'=>true]);

        return response(["msg" =>"current address updated successfully"]);

    }

}
