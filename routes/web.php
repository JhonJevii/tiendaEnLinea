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
Route::bind('producto', function($slug){
	return App\Producto::where('slug', $slug)->first();
});

Route::get('/', 'ProductsController@verProductos')->name('inicio');

Route::get('carro', function () {
    return view('cart');
})->name('carro');

Route::get('registrar-producto', 'ProductsController@tablaProductos')->name('tabla.producto');

Route::post('producto-ingresado', 'ProductsController@registrarProductos')->name('ingresar.productos');

Route::get('registrar-categoria', 'CategoriesController@tablaCategoria')->name('tabla.categoria');

Route::post('categoria-ingresado', 'CategoriesController@registrarCategoria')->name('ingresar.categoria');

//-------- Carro de compras --------------------

Route::get('mostrar-carro', 'CartController@mostar')->name('carro');

Route::get('mostrar-carro-producto', 'CartController@adicionarProducto')->name('carro.adionar');