<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Caracteristica;

class ProductsController extends Controller
{
    public function verProductos(){

    	$productos = Producto::all();
    	return view('inicio', compact('productos'));

    }

    public function tablaProductos(){

    	$categorias = Categoria::all();
    	$caracteristicas = Caracteristica::all();
    	return view('registrarProducto', compact('categorias', 'caracteristicas'));

    }

    public function registrarProductos(){


    }
}
