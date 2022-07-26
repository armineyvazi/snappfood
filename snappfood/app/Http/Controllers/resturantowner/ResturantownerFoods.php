<?php

namespace App\Http\Controllers\resturantowner;
use App\Http\Controllers\Controller;
use App\Models\admin\Discounts;
use App\Models\admin\FoodsCategory;
use App\Models\resturantowner\ResturantFoods;
use App\Http\Requests\StoreResturantownerFoods;
use App\Http\Requests\UpdateResturantownerFoods;
use App\Models\resturantowner\Restaurantowner;


class ResturantownerFoods extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $this->authorize('is_restaurant');
        $id=Restaurantowner::where('user_id',auth()->user()->id)->get();
        $data=ResturantFoods::where('restaurantowner_id',$id[0]['id'])->get();

        return  view('resturant.foods.foodsindex',compact('data'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $this->authorize('create',ResturantFoods::class);
        $foods=FoodsCategory::all();
        $discounts=Discounts::all();
        return  view('resturant.foods.foodscreate',compact('foods', 'discounts'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(StoreResturantownerFoods $request)
    {
       $this->authorize('create',ResturantFoods::class);
       $validate=$request->validated();
       $id=Restaurantowner::where('user_id',auth()->user()->id)->get();
       $newImage=time().'-'.$request->name.'-'.$validate['image']->extension();
       $validate['image']->move(public_path('images'),$newImage);
        $data=[
            'name'=>$validate['name'],
            'restaurantowner_id'=>$id[0]['id'],
            'foodscategory'=>$validate['foodscategory'],
            'discounts'=>$validate['discounts'],
            'price'=>$validate['price'],
            'rawmaterial'=>$validate['rawmaterial'],
            'foodsparty'=>$validate['foodsparty'],
            'image'=>$newImage,
        ];
        ResturantFoods::create($data);
        return redirect('restaurantowners/foods')->with('message','Foods add Resturant');
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


    public function edit(ResturantFoods $food)
    {
        $this->authorize('update',$food);
        $foods=FoodsCategory::all();
        $discounts=Discounts::all();
        $data=ResturantFoods::where('id',$food->id)->get();

        return  view('resturant.foods.foodsupdate',compact('data','discounts','foods'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(UpdateResturantownerFoods $request,ResturantFoods $food)
    {
        $this->authorize('update',$food);

        $validate=$request->validated();
        if (isset($validate['image'])) {
            $newImage=time().'-'.$request->name.'-'.$validate['image']->extension();
            $validate['image']->move(public_path('images'), $newImage);
        }
        else{
            $newImage=$validate['imagebefor'];
        }
        $data=[
            'name'=>$validate['name'],
            'foodscategory'=>$validate['foodscategory'],
            'discounts'=>$validate['discounts'],
            'price'=>$validate['price'],
            'foodsparty'=>$validate['foodsparty'],
            'rawmaterial'=>$validate['rawmaterial'],
            'image'=>$newImage,

        ];
        $food->update($data);

        return redirect('restaurantowners/foods')->with('message','Foods Update in Resturant');

    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(ResturantFoods $food)
    {
        $this->authorize('delete',$food);
        $food->delete();
        return  redirect()->route('foods.index')->with('message','Foods Delet  in Resturant');
    }
}
