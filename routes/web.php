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


Route::get('/notas/listado', 'NotaController@index')->name('listado_nota');

Route::get('/notas/create', 'NotaController@create')->name('create_nota');

Route::get('/archivos/listado', 'ArchivoController@index')->name('listado_archivo');

Route::get('/archivos/create', 'ArchivoController@create')->name('create_archivo');

//Route::get('/notas/create', 'NotaController@create')->name('create');
Route::post('/notas', 'NotaController@store')->name('notas.store');

Route::get('notas/{nota}/edit', 'NotaController@edit')->name('modifica_nota');
Route::put('notas/{nota}', 'NotaController@update')->name('notas.update');

// Route::get('notas/{nota}', 'NotaController@show')->name('notas.show');
Route::get('notas/{nota}', 'NotaController@show')->name('show_nota');

Route::post('/archivos', 'ArchivoController@store')->name('archivos.store');

Route::get('archivos/{uuid}/download', 'ArchivoController@download')->name('descarga_archivo');