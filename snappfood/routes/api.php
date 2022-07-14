<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AddressController;
use App\Http\Controllers\api\Carts;
use App\Http\Controllers\api\CartsController;
use App\Http\Controllers\api\Restaurants;
use App\Http\Controllers\api\CutomersConrtoller;



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

/**
* ----------------------------------
* |   Public|***********|Routes    |
* ----------------------------------
*/
Route::post('/register',[AuthController::class,'register']);//route for register
Route::post('/login',[AuthController::class,'login']);//route for login
/**
* ----------------------------------
* |   Procted|**********|Routes    |
* ----------------------------------
*/

Route::resource('carts',CartsController::class);

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function(){


    Route::post('logout',[AuthController::class,'logout']);//Route For Logout.

    Route::post('/customers/id/addresses',[AddressController::class,'store']);//Route For  Add Addresses For Customers.
    Route::post('/customers/id/addresses',[AddressController::class,'setCurrentAddress']);//Route For Setcurrrent Addresses

    Route::get('restaurants/{id}',[Restaurants::class,'index']);//Route For Get restaurant information

    Route::put('customers/{id}',[CutomersConrtoller::class,'update']);//Route For Update Customers


    Route::get('restaurants',[Restaurants::class,'search']);
    Route::get('restaurants/{restaurant_id}/foods',[Restaurants::class,'resturantsFood']);


});




