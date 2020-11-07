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

Route::get('/', function () {
    return view('index');
});



Route::get('administracion', function () {
    return view('administrador.masterpage');
})->name('Pagadmin');

Route::get('catalogo', function () {
    return view('administrador.catalogos');
});



//SERVICIOS
Route::resource('servicio', 'ServicioController');

//PRODUCTOS
Route::resource('producto', 'ProductoController');

//TIPO
Route::resource('tipo', 'TipoController');

//MARCA
Route::resource('marca', 'MarcaController');

//USUARIO
Route::resource('usuario', 'UsuarioController');

//BARBERIA
Route::resource('barberias', 'BarberiaController');

Route::resource('barberia', 'BarberiaController');

Route::resource('comentarios', 'ComentarioController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

