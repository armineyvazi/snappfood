<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreResturantCategoryRequest;
use App\Http\Requests\UpdateResturantCategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\admin\ResturantCategory;

class ResturantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('is_admin');
        $resturantCategory=ResturantCategory::all();
        return view('admin.resturantscategory.resturantindex',compact('resturantCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',ResturantCategory::class);
        return view('admin.resturantscategory.resturantcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResturantCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResturantCategoryRequest $request)
    {
        $this->authorize('create',ResturantCategory::class);
        $request->validated();
        ResturantCategory::create($request->safe()->only('name'));
        return redirect('/admin/resturantcategory')->with('message','ResturantCategory category is save');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ResturantCategory $resturantCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ResturantCategory $resturantcategory)
    {
        $this->authorize('update',$resturantcategory);
        $data=$resturantcategory->where('id',$resturantcategory->id)->get();
        return view('admin.resturantscategory.resturantupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResturantCategoryRequest  $request
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResturantCategoryRequest $request, ResturantCategory $resturantcategory)
    {
        $this->authorize('update',$resturantcategory);
        $request->validated();
        $resturantcategory->update($request->safe()->only('name'));
        return redirect('/admin/resturantcategory')->with('message','ResturantCategory  is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResturantCategory  $resturantCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResturantCategory $resturantcategory)
    {
        $this->authorize('delete',$resturantcategory);
        $resturantcategory->delete();
        return redirect('/admin/resturantcategory')->with('message','resturantcategory is deleted');
    }
}
