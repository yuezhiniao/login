<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('now', function () {
    return date("Y-m-d H:i:s");
});

Route::auth();

Route::get('/', 'HomeController@index');
//Route::get('article/{id}', 'ArticleController@show');
// Route::post('comment', 'CommentController@store');
Route::get('order/home','order\ordercontroller@index');   //订单路由主页
Route::get('order/sql','order\ordercontroller@sqltable');      //订单显示
Route::get('order/{waveid}/waveid','order\ordercontroller@waveid'); 
 
	Route::post('order/ffff','order\ordercontroller@ffff'); //查找订单


Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
	
    Route::resource('article', 'ArticleController');
});
Route::auth();

Route::get('/home', 'HomeController@index');
