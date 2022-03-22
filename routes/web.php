<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','portada')->name('portada')->middleware("auth");
Route::view('identificarse','formulario_autentificacion')->name('formulario_autentificacion');
Route::view('suscribirse', 'formulario_suscripcion')->name('formulario_suscripcion');
Route::view('inicio_sin_registro','inicio_sin_registro' )->name('inicio_sin_registro');
Route::view('privacidad_de_datos', 'privacidad_de_datos')->name('privacidad_de_datos');

?>