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


Route::resource('/clientes','UsuarioController');
Route::resource('/servicios','ServiciosController');
Route::resource('/grupos', 'GruposController');
Route::resource('/veredas', 'VeredasController');
Route::resource('/facturacion', 'FacturaController');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/users-pdf', 'UsuarioController@exportPdf')->name('usuarios.pdf');
Route::get('/factura_manual', 'HomeController@factura_manual');
