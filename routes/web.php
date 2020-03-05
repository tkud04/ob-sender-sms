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
Route::post('send', 'MainController@postBomb');
Route::post('sendd', 'MainController@postBombOutlook');
Route::get('send', 'MainController@getBomb');
Route::get('tt', 'MainController@getTemplate');
Route::get('test', 'MainController@getBlindingLights');
