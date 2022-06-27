<?php

use App\Http\Controllers\admin\DiscountsController;
use App\Http\Controllers\admin\FoodsCategoryController;
use App\Http\Controllers\resturantowner\RestaurantownerController;
// use App\Http\Controllers\admin\FoodsController;
use App\Http\Controllers\admin\ResturantCategoryController;
use App\Models\resturantowner\Restaurantowner;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;


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

// Route::middleware(['isadmin'])->prefix('resturantowner')->group(function () {

//     Route::resource('resturantprofile',RestaurantownerController::class)->name('get','resturantprofile');//=>profile/ProfileController

// });


// Route::resource('/returantowner/setting',FoodsController::class);

