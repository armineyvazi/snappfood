<?php

use App\Http\Controllers\admin\DiscountsController;
use App\Http\Controllers\admin\FoodsCategoryController;
use App\Http\Controllers\resturantowner\ResturantownerFoods;
use App\Http\Controllers\resturantowner\RestaurantownerController;
use App\Http\Controllers\admin\ResturantCategoryController;
use App\Http\Controllers\CallendersController;
use App\Http\Controllers\resturantowner\OrdersController;
use App\Models\resturantowner\Restaurantowner;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    'isadmin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
/**
* foods Category
*/
Route::middleware(['isadmin'])->prefix('admin')->group(function (){

    Route::resource('foodscategory', FoodsCategoryController::class);//=>foodscategory/FoodsController
    Route::resource('resturantcategory', ResturantCategoryController::class);//=>resturantcategory/ResturantCategoryController
    Route::resource('discounts', DiscountsController::class);//=>discounts/DiscountsController

});

Route::middleware(['resturant'])->prefix('restaurantowners')->group(function () {

    Route::resource('restaurantowner',RestaurantownerController::class);//=>profile/ProfileController
    Route::resource('foods',ResturantownerFoods::class);//=>foods/FoodsController
    Route::resource('shedules',CallendersController::class);//=>
    Route::get('orders',[OrdersController::class,'create']);
    Route::post('orders',[OrdersController::class,'update']);

});
