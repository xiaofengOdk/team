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

// Route::get('/', function () {
//     return view('welcome');
// });
	Route::get('/',"Admin\IndexController@index")->middleware('islogin');
Route::prefix('/visitor')->middleware('islogin')->group(function(){
	Route::get('/create',"Admin\VisitorController@create");
	Route::post('/score',"Admin\VisitorController@score");
	Route::get('/index',"Admin\VisitorController@index");
	Route::get('/edit/{id}',"Admin\VisitorController@edit");
	Route::get('/destroy/{id}',"Admin\VisitorController@destroy");
	Route::post('/update/{id}',"Admin\VisitorController@update");
});
Route::prefix('/login')->group(function(){
	Route::get('/index',"Admin\LoginController@index");
	Route::get('/tui',"Admin\LoginController@tui");
	Route::post('/score',"Admin\LoginController@score");

});




Route::get('/customer/create','CustomerController@create')->middleware('islogin');
Route::post('/customer/store','CustomerController@store')->middleware('islogin');
Route::get('/customer/index','CustomerController@index')->middleware('islogin');
Route::any('/customer/destroy/{c_id}','CustomerController@destroy')->middleware('islogin');
Route::any('/customer/edit/{c_id}','CustomerController@edit')->middleware('islogin');
Route::any('/customer/update/{c_id}','CustomerController@update')->middleware('islogin');

Route::prefix('/saleman')->middleware('islogin')->group(function(){
	Route::get('/create',"Admin\SalemanController@create");
	Route::post('/score',"Admin\SalemanController@score");
	Route::get('/index',"Admin\SalemanController@index");
	Route::get('/edit/{id}',"Admin\SalemanController@edit");
	Route::get('/destroy/{id}',"Admin\SalemanController@destroy");
	Route::post('/update/{id}',"Admin\SalemanController@update");

});
//后台管理员
Route::prefix('admin')->middleware('islogin')->group(function(){
	Route::get('create','AdminController@create');
	Route::post('store','AdminController@store');
	Route::get('index','AdminController@index');
	Route::get('destroy,{id}','AdminController@destroy');
	Route::get('edit/{id}','AdminController@edit');
	Route::post('update/{id}','AdminController@update');

});	
Route::prefix('new')->middleware('is_login')->group(function(){
	Route::get('/create','NewController@create');
	Route::post('/store','NewController@store');
	Route::get('/index','NewController@index');
	

});

Route::get('new/loginindex','LoginController@loginindex');
Route::post('new/score','LoginController@loginstore');
