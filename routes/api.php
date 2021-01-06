<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use App\Models\Department;
use App\Models\Designation;
use App\Models\PayGrade;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'products' => ProductController::class,
    'users' => User::class

    ]);

Route::group(['prefix' => 'products'], function (){
    Route::apiResource('/{products}/reviews', ReviewController::class);
});

Route::group(['prefix' => 'users'], function (){
    ROute::apiResources([
        '/{users}/departments' => Department::class,
        '/{users}/designations' => Designation::class,
	    '/{users}/grades' => PayGrade::class
    ]);
});

