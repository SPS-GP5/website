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

Route::get('/', function () {
    return view('welcome');
});

/* === Login === */
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');

/* === Registration === */
Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@postRegister');
Route::get('/confirm/{confirmcode}', 'AuthController@confirmEmail');

Route::group(['middleware' => 'auth'], function () {    
    Route::get('logout', 'AuthController@getLogout');
    
    Route::group(['prefix' => 'intern'], function () {
        
        Route::get('/', function () {
            return view('intern');
        });
        
        /* === Documents === */
        Route::get('/documents', 'DocumentController@showDocuments');
        Route::get('/documents/{filename}', 'DocumentController@downloadFile');
    });
});
