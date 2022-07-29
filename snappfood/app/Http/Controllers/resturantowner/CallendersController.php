<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Requests\StoreCallendersRequest;
use App\Models\api\Schedule;
use App\Models\resturantowner\Restaurantowner;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCallenderRequest;
use Illuminate\Http\Request;
use App\Models\User;

class CallendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resturant.profile.dashboardshedule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCallendersRequest $request)
    {
       $fields=$request->validated();


       $data_check_exist=Schedule::where('restaurantowner_id',User::find(auth()->user()->id)->resturant->user_id)->get()->first();


       if(!empty($data_check_exist))
       {
        return redirect('dashboard')->with('error', 'Please Update Your Time Resturant');
       }
       $data=array(
            'saturday'=>json_encode([$fields['sat-s'],$fields['sat-e']]),
            'sunday'=>json_encode([$fields['sun-s'],$fields['sun-e']]),
            'monday'=>json_encode([$fields['mon-s'],$fields['mon-e']]),
            'thuesday'=>json_encode([$fields['tue-s'],$fields['tue-e']]),
            'wednesday'=>json_encode([$fields['wed-s'],$fields['wed-e']]),
            'thursday'=>json_encode([$fields['thu-s'],$fields['thu-e']]),
            'friday'=>json_encode([$fields['fri-s'],$fields['fri-e']]),
            'restaurantowner_id'=>User::find(auth()->user()->id)->resturant->user_id,

       );
       Schedule::create($data);

       return redirect('dashboard')->with('message','Your Time  Resturant Is Save');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Schedule::where('restaurantowner_id',User::find(auth()->user()->id)->resturant->user_id)->get()->first();

        return view('resturant.profile.dashboardsheduleupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCallenderRequest $request, $id)
    {
        $fields=$request->validated();

        $data=array(
            'saturday'=>json_encode([$fields['sat-s'],$fields['sat-e']]),
            'sunday'=>json_encode([$fields['sun-s'],$fields['sun-e']]),
            'monday'=>json_encode([$fields['mon-s'],$fields['mon-e']]),
            'thuesday'=>json_encode([$fields['tue-s'],$fields['tue-e']]),
            'wednesday'=>json_encode([$fields['wed-s'],$fields['wed-e']]),
            'thursday'=>json_encode([$fields['thu-s'],$fields['thu-e']]),
            'friday'=>json_encode([$fields['fri-s'],$fields['fri-e']]),
            'restaurantowner_id'=>User::find(auth()->user()->id)->resturant->user_id,

       );
        Schedule::where('id',$id)->update($data);

        return redirect('dashboard')->with('message', 'Your restaurant has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
