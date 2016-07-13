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

Route::get('/', 'indexController@index');
Route::get('terminos-y-condiciones', 'indexController@getTermsConditions');
Route::get('ayuda', 'indexController@getHelp');
Route::get('contactanos', 'indexController@getContactUs');
Route::get('mascotas', 'petsController@getPetsLost');
Route::get('mascotas/perdidos', 'petsController@getPetsLost');
Route::get('mascotas/encontrados', 'petsController@getPetsFound');
Route::match(['get', 'post'], 'mis-reportes', 'reportsController@index');
Route::get('como-funciona', 'functioningController@index');
Route::get('como-funciona/web', 'functioningController@getFunctioningWeb');
Route::get('como-funciona/app', 'functioningController@getFunctioningApp');