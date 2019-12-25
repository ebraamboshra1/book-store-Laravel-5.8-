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


//User
Route::get('/','UserController@getuser');
Route::get('/register','UserController@register');
Route::post('/register-user','UserController@create_register');
Route::get('/login','UserController@login');
Route::post('/login-user','UserController@login_post');
Route::get('/logout','UserController@logout');
Route::get('/books','UserController@viewbooks');



//Admin
Route::get('/login-Admin','AdminController@login_view');
Route::post('/admin-login','AdminController@login');
Route::get('/admin-logout','AdminController@logout');
Route::get('/admin-table','AdminController@index');
Route::get('/admin-c', function () {
    return view('admin/adminadd');
});
Route::post('admin-create','AdminController@create');