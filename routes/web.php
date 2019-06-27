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

Route::get('/users', 'UsersController@index');

Route::get('/user/{id}', 'UsersController@show');

Route::get('/user', 'UsersController@create');

Route::get('/user/{id}/edit', 'UsersController@edit');

