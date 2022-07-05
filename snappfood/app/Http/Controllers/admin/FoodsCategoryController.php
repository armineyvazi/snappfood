<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreFoodsCategoryRequest;
use App\Http\Requests\UpdateFoodsCategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\admin\FoodsCategory;

class FoodsCategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $this->authorize('is_admin');
        $foodsCategory=FoodsCategory::all();
        return view('admin.foodscategory.foodscategoryindex',compact('foodsCategory'));
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $this->authorize('create',FoodsCategory::class);
        return view('admin.foodscategory.foodscategory');
    }


    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreFoodsCategoryRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreFoodsCategoryRequest $request)
    {
       $this->authorize('create',FoodsCategory::class);
       $validated = $request->validated();
       FoodsCategory::create($request->safe()->only('name'));
       return redirect('/admin/foodscategory')->with('message','Food category is save');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\FoodsCategory  $foodsCategory
    * @return \Illuminate\Http\Response
    */
    public function show(FoodsCategory $foodscategory)
    {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\FoodsCategory  $foodsCategory
    * @return \Illuminate\Http\Response
    */
    public function edit(FoodsCategory $foodscategory)
    {
        $this->authorize('update', $foodscategory);
        $data=$foodscategory->where('id',$foodscategory->id)->get();
        return view('admin.foodscategory.foodscategoryupdate',compact('data'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateFoodsCategoryRequest  $request
    * @param  \App\Models\FoodsCategory  $foodsCategory
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateFoodsCategoryRequest $request, FoodsCategory $foodscategory)
    {
        $this->authorize('update', $foodscategory);
        $request->validated();
        $foodscategory->update($request->safe()->only('name'));
        return redirect('/admin/foodscategory')->with('message','Food category is updated');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\FoodsCategory  $foodsCategory
    * @return \Illuminate\Http\Response
    */
    public function destroy(FoodsCategory $foodscategory)
    {
       $this->authorize('delete',$foodscategory);
       $foodscategory->delete();
       return redirect('/admin/foodscategory')->with('message','Foods Category deleted');
    }
}
