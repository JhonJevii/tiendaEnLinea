<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Producto;
use App\Categoria;
use App\Caracteristica;
use App\ImageProduct;
use Input;

class GeneralController extends Controller
{
    public function verProductos(){

    	$productos = Producto::all();
    	return view('general.inicio', compact('productos'));

    }
}
