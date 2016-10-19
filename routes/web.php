<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/account/activate/{token}', 'AccountController@activate');

Route::group(['middleware' => ['active', 'auth']], function () {
    Route::get('home', 'HomeController@index');

    // Administrator, Trainer and Facilitator only
    Route::group(['middleware' => ['role:administrator|trainer|facilitator']], function () {
        Route::resource('users', 'UsersController');
    });
});
