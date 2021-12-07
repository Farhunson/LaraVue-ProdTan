<?php

use Illuminate\Http\Request;

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

// menambahkan route untuk business
Route::get('/business','BusinessController@all');
Route::get('/business/{id}','BusinessController@show');
Route::post('/business','BusinessController@store');
Route::put('/business/{id}','BusinessController@update');
Route::delete('/business/{id}','BusinessController@delete');