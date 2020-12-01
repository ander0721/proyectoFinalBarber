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

Route::get('clienteIndex', function () {
    $barberia = App\Barberia::all();
    $marcas = App\Marca::all();
    $productos = App\Producto::find(10);
    $comentarios = App\Comentario::all();
    
    return view('cliente.index')
    ->with('barberia',$barberia)
    ->with('marcas',$marcas)
    ->with('productos',$productos)
    ->with('comentarios',$comentarios);;
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


Route::get('/post', 'PostController@index');
Route::post('/like', 'PostController@like')->name('posts.like');

Route::post('/like', 'ComentarioController@like')->name('comentario.like');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/cliente', function () {
    $barberia = App\Barberia::all();
    $marcas = App\Marca::all();
    $productos = App\Producto::find(10);
    $comentarios = App\Comentario::all();
    return view('cliente.cliente')
    ->with('barberia',$barberia)
    ->with('marcas',$marcas)
    ->with('productos',$productos)
    ->with('comentarios',$comentarios);
})->name('clienteasd');