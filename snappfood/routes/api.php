<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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







//Procted Routes routes
Route::group(['middleware' => ['auth:sanctum']],function(){

    Route::post('logout',[AuthController::class,'logout']);//route for logout.
    



});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


