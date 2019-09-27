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

Route::get('login','LoginController@index')->name('login');

Route::get('contacto','ContactoController@index')->name('contacto');

Route::get('quien', function () {

    return view('aplicacion.quien');
})->name('quien');
Route::get('recuperar','RecuperarController@index')->name('recuperar');