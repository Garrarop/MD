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
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/votar', function () {
    return view('votar');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/success', function () {
    return view('success');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/resultados', 'BusquedasController@buscar')->name('buscar');

Route::get('/pruebas','PruebasController@prueba');

Route::post('/contacto', 'PruebasController@mensaje');

Route::get('/perfil/{id?}', 'UsuariosController@verPerfil')->name('Perfil');

Route::get('/configuracion', 'UsuariosController@configuraciones')->name('config')->middleware(['auth']);

Route::post('/enlazar', 'UsuariosController@enlazar')->middleware(['auth']);

Route::post('/general', 'UsuariosController@general');

Route::post('/redes', 'UsuariosController@redes');

Route::post('/lang', 'PruebasController@lang');

Route::get('/completarPerfil','UsuariosController@completarPerfil')->name('Completar')->middleware(['auth']);
