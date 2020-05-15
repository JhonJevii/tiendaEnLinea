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


Route::get('/', 'GeneralController@verProductos')->name('inicio');

#----------------------------------------------------------------------------------------------------
Route::get('registrar-producto', 'CreateController@formularioProductos')->name('formulario.producto');
Route::post('producto-ingresado', 'CreateController@registrarProductos')->name('ingresar.productos');
#-----------------------------------------------------------------------------------------------------

#-----------------------------------------------------------------------------------------------------
Route::get('registrar-categoria', 'CreateController@formularioCategoria')->name('formulario.categoria');
Route::post('categoria-ingresado', 'CreateController@registrarCategoria')->name('ingresar.categoria');
#-----------------------------------------------------------------------------------------------------


#--------------------------------------------------------------------------------------------------------
Route::get('registrar-detalle', 'CreateController@formularioDetalle')->name('formulario.detalle');
Route::post('detalle-ingresado', 'CreateController@registrarDetalle')->name('ingresar.detalle');
#--------------------------------------------------------------------------------------------------------

#--------------------------------------------------------------------------------------------------------
Route::get('registrar-oferta', 'CreateController@formularioOferta')->name('formulario.oferta');
Route::post('oferta-ingresado', 'CreateController@registrarOferta')->name('ingresar.oferta');
#--------------------------------------------------------------------------------------------------------

#--------------------------------------------------------------------------------------------------------
Route::get('registrar-proveedor', 'CreateController@formularioProveedor')->name('formulario.proveedor');
Route::post('proveedor-ingresado', 'CreateController@registrarProveedor')->name('ingresar.proveedor');
#--------------------------------------------------------------------------------------------------------

//-------- Carro de compras --------------------

Route::get('mostrar-carrito/{id}', 'GeneralController@mostrarCarrito')->name('carrito.mostrar');

Route::get('agregar-carrito/{idProducto}/{precioUnitario}' , 'GeneralController@agregarAlCarrito')->name('carrito.agregar');



Route::post('categoria-ingresado', 'CategoriesController@registrarCategoria')->name('ingresar.categoria');

//-------- Carro de compras --------------------

Route::get('mostrar-carro', 'CartController@mostar')->name('carro');

Route::get('mostrar-carro-producto', 'CartController@adicionarProducto')->name('carro.adionar');

