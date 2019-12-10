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
Route::get('/', 'HomeController@index');
Route::post('/addtocarrito', 'CarritoController@store')->middleware('auth');
Route::get('/carrito', 'CarritoController@index')->middleware('auth');
Route::post('/sacarDeCarrito', 'CarritoController@destroy')->middleware("auth");
// Route::post('/comprarcarrito', 'CarritoController@show')->middleware('auth');
Route::get('/cargarproducto', 'ProductoController@index')->middleware('auth');
Route::post('/cargarproducto', 'ProductoController@store')->middleware('auth');
Route::post('verProducto', 'ProductoController@show')->middleware('auth');
