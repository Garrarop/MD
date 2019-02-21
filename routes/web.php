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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/resultados', 'BusquedasController@buscar')->name('buscar');

Route::get('/pruebas','PruebasController@prueba');

Route::post('/postear', 'PruebasController@postear');

Route::get('/perfil/{id?}', 'UsuariosController@verPerfil')->name('Perfil');

Route::get('/completarPerfil','UsuariosController@completarPerfil')->name('Completar')->middleware(['auth']);;
