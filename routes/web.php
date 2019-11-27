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
    Route::get('/',['as'=>'category.index','uses'=>'CategoryController@index']);
    Route::get('create',['as'=>'category.create','uses'=>'CategoryController@create']);
    Route::post('create',['as'=>'category.store','uses'=>'CategoryController@store']);
    Route::get('edit/{id}',['as'=>'category.edit','uses'=>'CategoryController@edit']);
    Route::post('edit/{id}',['as'=>'category.update','uses'=>'CategoryController@update']);
    Route::get('delete/{id}',[
        'as'=>'category.destroy',
        'uses'=>'CategoryController@destroy']);
});

Route::group(['prefix'=>'product'],function(){
    Route::get('/',['as'=>'product.index','uses'=>'ProductController@index']);
});
