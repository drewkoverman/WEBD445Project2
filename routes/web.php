<?php

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

//Routing for the home page
Route::get('/', function () {
  return view('orders/index');
});

//RESTful API routes
Route::get('api/v1/orders', 'OrderController@index');
Route::get('api/v1/orders/{id}', 'OrderController@show');
Route::post('api/v1/orders', 'OrderController@store');
Route::delete('api/v1/orders/{id}', 'OrderController@destroy');

//Route::resource('orders', 'OrderController');
