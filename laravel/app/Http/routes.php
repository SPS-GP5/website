<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth' => 'AuthController',
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intern', function () {
    return view('intern');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/documents', function () {
    return view('documents');
});

Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@postLogin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'AuthController@showLogout');

    Route::group(['prefix' => 'intern'], function () {
        
    });
});
