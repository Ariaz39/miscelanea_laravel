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


Route::resource('clientes','UsuarioController');
Route::get('/servicios', 'HomeController@servicios');
Route::get('/grupos', 'HomeController@grupos');
Route::get('/veredas', 'HomeController@veredas');
Route::get('/factura', 'HomeController@factura');
Route::get('/factura_manual', 'HomeController@factura_manual');
