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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/customer/create','CustomerController@create');
Route::post('/customer/store','CustomerController@store');
Route::get('/customer/index','CustomerController@index');
Route::any('/customer/destroy/{c_id}','CustomerController@destroy');
Route::any('/customer/edit/{c_id}','CustomerController@edit');
Route::any('/customer/update/{c_id}','CustomerController@update');