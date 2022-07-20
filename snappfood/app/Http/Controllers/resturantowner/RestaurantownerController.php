<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Requests\StoreRestaurantownerRequest;
use App\Http\Requests\UpdateRestaurantownerRequest;
use App\Models\resturantowner\Restaurantowner;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\admin\ResturantCategory;

class RestaurantownerController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $data=ResturantCategory::all();
        $findUserId=User::where('id',auth()->user()->id)->get();
        $datauser=Restaurantowner::where('user_id',$findUserId[0]['id'])->get();

        return view('resturant.profile.dashboardedite',compact('data','datauser'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {


        $data=ResturantCategory::all();
        return view('resturant.profile.dashboardprofile',compact('data'));

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreRestaurantownerRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreRestaurantownerRequest $request ,Restaurantowner $restaurantowner)
    {
       // dd($request->all());
       $this->authorize('view',$restaurantowner);
       $request->validated();

        $data_save=[
            'name'=>$request->get('name'),
            'user_id'=>auth()->user()->id,
            'resturantcategory'=>$request->get('resturantcategory'),
            'city'=>$request->get('city'),
            'address'=>$request->get('address'),
            'accountnumber'=>$request->get('accountnumber'),
            'phone'=>$request->get('phone'),
            'latitude'=>$request->get('lat'),
            'longitude'=>$request->get('lng'),

        ];
        User::where('id',auth()->user()->id)->update(['checkprofile_resturant'=>1]);
        $restaurantowner->create($data_save);

        return redirect('/dashboard')->with('message','now you can use abilities resturant enjoy that');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Restaurantowner  $restaurantowner
    * @return \Illuminate\Http\Response
    */

    public function show(Restaurantowner $restaurantowner)
    {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Restaurantowner  $restaurantowner
    * @return \Illuminate\Http\Response
    */
    public function edit(Restaurantowner $restaurantowner)
    {

    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateRestaurantownerRequest  $request
    * @param  \App\Models\Restaurantowner  $restaurantowner
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateRestaurantownerRequest $request,Restaurantowner $restaurantowner)
    {
    
        $this->authorize('update',$restaurantowner);
        $restaurantowner->update($request->safe()->only('name','resturantcategory','city','address','phone','accountnumber','isopen'));
        return redirect()->route('restaurantowner.index')->with('message','Your inforamtion has been updated successfully.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Restaurantowner  $restaurantowner
    * @return \Illuminate\Http\Response
    */

    public function destroy(Restaurantowner $restaurantowner)
    {
        //
    }
}
