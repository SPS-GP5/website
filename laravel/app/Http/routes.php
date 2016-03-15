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

/* === Login === */
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');

/* === Registration === */
Route::get('/register', function () { return view('register'); });
Route::post('/register', 'AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {    
    Route::get('logout', 'AuthController@getLogout');
    
    Route::group(['prefix' => 'intern'], function () {
        
        Route::get('/', function () {
            return view('intern');
        });
        
        /* === Documents === */
        Route::get('/documents', 'DocumentController@getDocuments');
    });
});
