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

// Route::get('/', function(){
//   return view("main");
// });
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@entry');
Route::post('/addtocarrito', 'CarritoController@store')->middleware('auth');
Route::get('/carrito', 'CarritoController@index')->middleware('auth');
Route::post('/sacarDeCarrito', 'CarritoController@destroy')->middleware("auth");
// Route::post('/comprarcarrito', 'CarritoController@show')->middleware('auth');
Route::get('/cargarproducto', 'ProductoController@index')->middleware('auth');
Route::post('/cargarproducto', 'ProductoController@store')->middleware('auth');
Route::post('/verProducto', 'ProductoController@show')->middleware('auth');
Route::post('/editarProducto', 'ProductoController@edit')->middleware('auth');
Route::post('/productoEditado', 'ProductoController@update')->middleware('auth');
Route::post('/eliminarProducto', 'ProductoController@destroy')->middleware('auth');
Route::get('/verperfilusuario', 'UserController@index')->middleware('auth');
Route::post('/productoencontrado', 'HomeController@buscar')->middleware('auth');
Route::get('/crearcategoria', 'CategoriaController@create')->middleware('auth');
Route::post('/guardarcategoria', 'CategoriaController@store')->middleware('auth');
Route::get('/vercategoria', 'CategoriaController@show')->middleware('auth');
Route::get('/vercuadros', 'CategoriaController@show');
Route::get('/vermuebles', 'CategoriaController@show');
Route::get('/verdecoracion', 'CategoriaController@show');
