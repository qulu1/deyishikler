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

Route::get('/', function () {
    return view('welcome');
});

Route::get('single', "NewsController@single");

Route::get('home', "NewsController@home");

Route::get('category', "NewsController@category");

Route::get('index', "NewsController@index");



Route::get('create', "AdminController@index");

Route::post('/create',"AdminController@create");

Route::get('/show',"AdminController@show");

Route::get('/xeber/{xeber}/edit', "AdminController@edit");

Route::patch('/xeber/{xeber}', "AdminController@update");

Route::delete('/xeber/{xeber}/delete', "AdminController@destroy");



