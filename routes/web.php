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

//Metodo SAVE
Route::get('/alumno', 'AlumnoController@index');
Route::post('/alumno', 'AlumnoController@store');
//Metodo saveMany
Route::get('/editorial', 'EditorialController@index');
Route::post('/editorial', 'EditorialController@store');
//Metodo createMany
Route::get('/capitulo', 'CapituloController@index');
Route::post('/capitulo', 'CapituloController@store');
//Metodo Attach
Route::post('storeRentasAttach', 'LibroController@storeRentasAttach');
//Metodo Sync
Route::post('storeRentasSync', 'LibroController@storeRentasSync');
//Consulta estilo Through
Route::get('getEditoriales', 'EditorialController@getEditoriales');

//Consulta de calificaciones de editorial
Route::get('calificacioneditorial', 'CalificacionController@index');
//Registro de calificaciones de editorial
Route::post('calificacioneditorial', 'CalificacionController@store');
//Consulta de calificaciones de libro
Route::get('calificacionlibro', 'CalificacionController@indexLibro');
//Registro de calificaciones de libro
Route::post('calificacionlibro', 'CalificacionController@storeLibro');
//Consulta de calificaciones de autor
Route::get('calificacionautor', 'CalificacionController@indexAutor');
//Registro de calificaciones de autor
Route::post('calificacionautor', 'CalificacionController@storeAutor');
