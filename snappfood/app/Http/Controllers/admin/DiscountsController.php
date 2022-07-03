<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreDiscountsRequest;
use App\Http\Requests\UpdateDiscountsRequest;
use App\Http\Controllers\Controller;
use App\Models\admin\Discounts;
use Illuminate\Support\Facades\Gate;


class DiscountsController extends Controller
{
    /**discounts
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
            $discounts=Discounts::all();
        return view('admin.discounts.discountindex',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.discounts.discount');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscountsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscountsRequest $request)
    {

        $validated = $request->validated();

        Discounts::create($request->safe()->only('name','price'));

      return redirect('/admin/discounts')->with('message','Discounts  is save');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function show(Discounts $discounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Discounts::where('id',$id)->get();

        return view('admin.discounts.discountupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountsRequest  $request
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscountsRequest $request, $id)
    {

        $validated = $request->validated();

        Discounts::where('id',$id)->update($request->safe()->only('name','price'));

     return redirect('/admin/discounts')->with('message','Discounts  is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         Discounts::find($id)->delete();

        return redirect('/admin/discounts')->with('message','Discount is deleted');
    }

}
