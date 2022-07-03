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
        $this->authorize('is_admin');
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
        $this->authorize('create',Discounts::class);//only admin can create discount.
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

        $this->authorize('create',Discounts::class);//only admin can create discount.
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
    public function edit(Discounts $discounts,$id)
    {
        $this->authorize('update',$discounts);//only admin can create discount.

        $discounts=$discounts->where('id',$id)->get();

    return view('admin.discounts.discountupdate',compact('discounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountsRequest  $request
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscountsRequest $request, Discounts $discounts,$id)
    {

        $this->authorize('update',$discounts);//only admin can create discount.

        $request->validated();

        $discounts->where('id',$id)->update($request->only('name','price'));
    return redirect('/admin/discounts')->with('message','Discounts  is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discounts  $discounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discounts $discounts,$id)
    {
        $this->authorize('delete',$discounts);
      $discounts->where('id',$id)->delete();
    return redirect('/admin/discounts')->with('message','Discount is deleted');
    }

}
