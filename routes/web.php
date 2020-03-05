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

Route::get('/', 'MainController@getIndex');
Route::post('send', 'MainController@postBombOutlook');
Route::post('sendd', 'MainController@postBomb');
Route::get('send', 'MainController@getBomb');
Route::get('tt', 'MainController@getTemplate');
Route::get('test', 'MainController@getBlindingLights');


Route::get('singup', 'LoginController@getSignup');
Route::post('singup', 'LoginController@postSignup');
Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');
