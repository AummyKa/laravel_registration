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

Route::get('/profile', 'PageController@showProfile');
Route::get('/register', 'PageController@showRegist');

Route::get('/data_table', 'PageController@index');
Route::post('user/delete', 'PageController@destroy');
Route::post('/edit-form', 'PageController@destroy');
Route::get('user/{id}/edit', 'PageController@edit');
Route::post('user/{id}/update', 'PageController@update');
Route::post('user/insert', 'PageController@insert');
// Route::get('data_table', array('as'=>'user' => 'user@index'));

