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
    return view('category.create');
});

Route::group(['prefix'=>'category'],function(){
    Route::get('/',['as'=>'miex','uses'=>'CategoryController@index']);
    Route::get('agregar',['as'=>'category.create','uses'=>'CategoryController@create']);
    Route::post('agregar',['as'=>'category.create','uses'=>'CategoryController@store']);
});
