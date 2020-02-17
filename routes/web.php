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
Route::get('/', 'ProductsController@verProductos')->name('inicio');

Route::get('registrar-producto', 'ProductsController@tablaProductos')->name('tabla.producto');

Route::post('producto-ingresado', 'ProductsController@registrarProductos')->name('ingresar.productos');