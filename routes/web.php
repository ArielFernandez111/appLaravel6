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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'Auth\LoginController@inicio');

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@home')->name('home');


Route::get('/notas/listado', 'NotaController@index')->name('listado');

Route::get('/notas/create', 'NotaController@create')->name('create');

Route::get('/archivos/listado_a', 'ArchivoController@index')->name('listado_a');

Route::get('/archivos/create_a', 'ArchivoController@create')->name('create_a');

//Route::get('/notas/create', 'NotaController@create')->name('create');
Route::post('/notas', 'NotaController@store')->name('notas.store');

Route::get('notas/{nota}', 'NotaController@show')->name('notas.show');