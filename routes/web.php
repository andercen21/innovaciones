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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/','AgenciaController@vista');
//Route::get('/','AntiguedadController@vista');
//Route::get('/','AuditoriaController@vista');
//Route::get('/','DepartamentoController@vista');
//Route::get('/','EmpleadoController@vista');
//Route::get('/','EncuestaController@vista');
//Route::get('/','Fecha_FestividadController@vista');
//Route::get('/','FestividadController@vista');
Route::get('/','MensajeController@vista');

Route::post('/create','AgenciaController@create');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
