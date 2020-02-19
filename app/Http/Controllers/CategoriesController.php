<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Caracteristica;

class CategoriesController extends Controller
{
    public function verCategoria(){

    	$categorias = Categoria::all();
    	return view('inicio', compact('categorias'));

    }

    public function tablaCategoria(){

    	$categorias = Categoria::all();
    	$caracteristicas = Caracteristica::all();
    	return view('categorias', compact('categorias', 'caracteristicas'));

    }

    public function registrarCategoria(){

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;               
        $solicitud->save();

    }
}
