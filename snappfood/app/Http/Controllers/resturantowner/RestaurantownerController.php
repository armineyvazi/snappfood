<?php

namespace App\Http\Controllers\resturantowner;

use App\Http\Requests\StoreRestaurantownerRequest;
use App\Http\Requests\UpdateRestaurantownerRequest;
use App\Models\resturantowner\Restaurantowner;
use App\Http\Controllers\Controller;

class RestaurantownerController extends Controller
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
        return view('resturant.profile.dashboardcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantownerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantownerRequest $request)
    {
        dd('ajab');
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurantowner $restaurantowner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurantowner $restaurantowner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantownerRequest  $request
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantownerRequest $request, Restaurantowner $restaurantowner)
    {
        //
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
