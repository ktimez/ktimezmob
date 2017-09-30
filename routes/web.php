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

Route::get('/',['as'=>'home','uses'=>'MobileWebController@index']);

Route::get('/assets/{img}/{h?}/{w?}',['as'=>'images','uses'=>'AssetsController@index']);

// smooth transition
Route::get('posts/{slug}',['as'=>'post','uses'=>'MobileWebController@getPost']);
Route::get('post/{slug}',['as'=>'post','uses'=>'MobileWebController@getPost']);

#smooth transition
Route::get('cats/{catname}',['as'=>'cats','uses'=>'MobileWebController@getCategory']);
Route::get('category/{catname}',['as'=>'cats','uses'=>'MobileWebController@getCategory']);

Route::post('comment/{id}',['as'=>'comments','uses'=>'MobileWebController@postComment']);
