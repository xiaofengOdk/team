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
Route::prefix('/visitor')->group(function(){
	Route::get('/create',"Admin\VisitorController@create");
	Route::post('/score',"Admin\VisitorController@score");
	Route::get('/index',"Admin\VisitorController@index");
	Route::get('/edit/{id}',"Admin\VisitorController@edit");
	Route::get('/destroy/{id}',"Admin\VisitorController@destroy");
	Route::post('/update/{id}',"Admin\VisitorController@update");
});
Route::prefix('/saleman')->group(function(){
	Route::get('/create',"Admin\SalemanController@create");
	Route::post('/score',"Admin\SalemanController@score");
	Route::get('/index',"Admin\SalemanController@index");
	Route::get('/edit/{id}',"Admin\SalemanController@edit");
	Route::get('/destroy/{id}',"Admin\SalemanController@destroy");
	Route::post('/update/{id}',"Admin\SalemanController@update");

});
