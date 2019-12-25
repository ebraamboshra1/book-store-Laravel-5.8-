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



Route::get('/','UserController@getuser');
Route::get('/register','UserController@register');
Route::post('/register-user','UserController@create_register');
Route::get('/login','UserController@login');
Route::post('/login-user','UserController@login_post');
Route::get('/logout','UserController@logout');
Route::get('/books','UserController@viewbooks');

