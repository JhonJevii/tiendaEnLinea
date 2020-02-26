<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('carro')) \Session::put('carro', array());
    }

    public function mostrar()
    {
    	$carro = \Session::get('carro');
    	return view('cart', compact('carro'));
    }

    public function adicionarProducto(Producto $producto)
    {
    	$carro = \Session::get('carro');
    	$producto->quantity = 1;
    	$carro[$prodcuto->slug] = $producto;
    	\Session::put{'carro', $carro};

    	return redirect()->route{'carro-mostrar'};
    }
}
