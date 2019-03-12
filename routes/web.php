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


Route::view('dia/lunes', '/dia/lunes');					//carga la view lunes
Route::view('dia/martes', '/dia/martes');					//carga la view martes
Route::view('dia/miercoles', '/dia/miercoles');			//carga la view miercoles
Route::view('dia/jueves', '/dia/jueves');					//carga la view jueves
Route::view('dia/viernes', '/dia/viernes');				//carga la view viernes
Route::view('dia/sabado', '/dia/sabado');					//carga la view sabado
Route::view('dia/domingo', '/dia/domingo');				//carga la view domingo

Route::view('/docs/politicas', '/docs/politicas');						//carga la view politicas
Route::view('/docs/terminos', '/docs/terminos');						//carga la view terminos

Route::resource('proday', 'PromocionController');
Route::resource('nuevoest', 'EstablecimientoController');

Route::redirect('/', '/proday');