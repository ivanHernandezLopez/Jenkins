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

Route::get('/users', function () {
    return 'Usuarios';
});


Route::get('/user/{id}', function ($id) {
    return 'Detale de usuario ' . $id ;
});

Route::get('/user', function () {
    return 'Creando usuario' ;
});


Route::get('/user/{id}/view', function ($id) {
    return 'Vista de usuario ' . $id ;
});

