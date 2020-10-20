<?php

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

Route::post('login', 'App\Http\Controllers\UserController@login');
Route::post('register', 'App\Http\Controllers\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'App\Http\Controllers\UserController@details');
    });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('blood/request', 'App\Http\Controllers\BloodRequestController@create');
