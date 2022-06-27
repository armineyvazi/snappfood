<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodsRequest;
use App\Http\Requests\UpdateFoodsRequest;
use App\Models\Foods;
use PDO;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allfoods=Foods::all();



        return view('admin.foods.foodsindex',compact('allfoods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foods.foods');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodsRequest $request)
    {
        /**
        * ravbete ina bayad neveste shavad
        */
        $validated = $request->validated();
        $data=[
            'foods_category_id'=>'1',
            'resturants_id'=>2,
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),


        ];
        Foods::create($data);

       return redirect('/admin/foods/create')->with('message','Food category is save');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function show(Foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Foods::where('id',$id)->get();

        return view('admin.foods.foodsupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodsRequest  $request
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodsRequest $request, $id)
    {
        $validated = $request->validated();
        $data=[
            'foods_category_id'=>'1',
            'resturants_id'=>2,
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),

        ];
        Foods::where('id',$id)->update($data);

        return redirect('/admin/foods/create')->with('message','Foods is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Foods::find($id)->delete();
        return redirect('/admin/foods/create')->with('message','Foods  deleted');
    }
}
