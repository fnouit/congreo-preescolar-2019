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


Auth::routes();

// Administrador
Route::middleware(['auth','admin'])->group(function()
{
    Route::get('/home', 'Admin\UsuarioController@index')->name('home');
    Route::get('/usuario/{id}','Admin\UsuarioController@show')->name('usuario');
    Route::get('/usuario/{id}/editar','Admin\UsuarioController@edit')->name('mostrar'); 
    Route::put('usuario/{id}/editar','Admin\UsuarioController@update')->name('actualizar');
    Route::delete('/usuario/{id}', 'Admin\UsuarioController@destroy')->name('eliminar'); 
    Route::get('exportar-archivo/{type}', 'Admin\UsuarioController@exportar')->name('exportar_archivo');
});


// Usuario 
// Route::get('/', 'RegistrarUsuarioController@index')->name('inicio');
// Route::post('/registro', 'RegistrarUsuarioController@store')->name('registro'); # Registrar usuarios
// Route::get('/buscar', 'RegistrarUsuarioController@buscar')->name('buscar'); # Buscar registro
// Route::get('/privacidad', 'RegistrarUsuarioController@privacidad')->name('privacidad'); # Página de privacidad

// Registro Congreso Preescolar
Route::get('/','RegistrarUsuarioController@index')->name('inicio');
Route::get('/congreso-preescolar-2019/registro', 'RegistrarUsuarioController@create')->name('registro'); # Registrar usuarios
Route::post('/congreso-preescolar-2019/registro', 'RegistrarUsuarioController@store')->name('registro'); # Almacenar la información
Route::get('/congreso-preescolar-2019/talleres', 'RegistrarUsuarioController@talleres')->name('talleres'); # Página para mostrar los talleres
Route::get('/congreso-preescolar-2019/verificacion', 'RegistrarUsuarioController@verificacion')->name('verificacion'); # Página para verificar si estas registrado
Route::get('/congreso-preescolar-2019/buscar', 'RegistrarUsuarioController@buscar')->name('buscar'); # Buscar registro
Route::get('/congreso-preescolar-2019/privacidad', 'RegistrarUsuarioController@privacidad')->name('privacidad'); # Página de privacidad

Route::get('/regiones/{id}/delegaciones','DelegacionController@delegaciones');