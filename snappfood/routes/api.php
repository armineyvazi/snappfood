<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AddressController;
use App\Http\Controllers\api\Restaurants;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//public Routes
Route::post('/register',[AuthController::class,'register']);//route for register
Route::post('/login',[AuthController::class,'login']);//route for login
/**
* ----------------------------------
* |   Procted          Routes      |
* ----------------------------------
*/
//Procted Routes routes
Route::group(['middleware' => ['auth:sanctum']],function(){

    Route::post('logout',[AuthController::class,'logout']);//Route For Logout.
    Route::post('addresses',[AddressController::class,'store']);//Route For  Addresses
    Route::post('setcurrentaddresses',[AddressController::class,'setCurrentAddress']);//Route For Setcurrrent Addresses
    Route::get('restaurants/{id}',[Restaurants::class,'getRestaurants']);//Route For Get restaurant information
    Route::patch('customer/update/{id}',[AuthController::class,'update']);//Route For Update Customers
    Route::get('restaurants',[Restaurants::class,'search']);
    Route::get('restaurants/getcategory/{id}',[Restaurants::class,'getResturantFoods']);


});




