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

Route::group(['middleware' => 'no_auth'], function(){
    Route::get('/', function () {
        return view('login');
    });

    Route::post('/register', 'UserController@register');
    Route::post('/login', 'UserController@login');
});

Route::group(['middleware' => 'custom_auth'], function(){
    Route::get('/home', function(){
        return view('home');
    });

    Route::post('/logout', 'UserController@logout');
});