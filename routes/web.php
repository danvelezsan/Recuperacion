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

Route::get('/A765', 'VehiculoController@index');
Route::get('/A765/registrarVehiculo', 'VehiculoController@create');
Route::get('/A765/listarVehiculos', 'VehiculoController@show');
Route::get('/A765/estadisticasVehiculos', 'VehiculoController@stats');
Route::resource('vehiculos', 'VehiculoController');

Route::fallback(function() {
    return view('error');
});