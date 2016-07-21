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
Route::get('mis-reportes', 'reportsController@index');
Route::get('como-funciona', 'functioningController@index');
Route::get('como-funciona/web', 'functioningController@getFunctioningWeb');
Route::get('como-funciona/app', 'functioningController@getFunctioningApp');

// Ajax Pet
Route::get('mascotas-detalle', 'petsController@getPetsDetail');

// Ajax Reports
Route::get('mis-reportes-detalle-perdido', 'reportsController@getReportsDetailLost');
Route::get('mis-reportes-detalle-encontrado', 'reportsController@getReportsDetailFound');

// Ajax Ubigeo
Route::get('ubigeo-ciudades', 'ubigeoController@getUbigeoCity');
Route::get('ubigeo-distritos', 'ubigeoController@getUbigeoDistrict');

// AJax Send ReportPost
Route::get('mis-reportes-registrar', 'reportsController@sendReport');