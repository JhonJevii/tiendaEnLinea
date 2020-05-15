<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Producto;
use App\Categoria;
use App\Caracteristica;
use App\ImageProduct;
use App\Carrito;
use Input;
use Session;
use Redirect;
use Auth;

class GeneralController extends Controller
{
    public function verProductos(){

    	$productos = Producto::all();
        $carrito = Carrito::all()->count();
    	return view('general.inicio', compact('productos', 'carrito'));

    }

    public function mostrarCarrito($idProducto)
    {
        //$carros = Carrito::all();
        //$carrito = Carrito::all()->count();
        
        $productos = Producto::find($idProducto);
        $carrito = session()->get('carrito');

        if ($carrito){

            $carrito = [
                $idProducto => [
                    "nombre" => $productos->nombre,
                    "cantidad" => 1,
                    "precio" => $productos->precioUnitario
                    //"foto" => $productos->si la habilita debe ponerle la coma al anterio
                ]
            ];

            session()->put('carrito', $carrito);
            return redirect()->back()->with('succcess', 'Producto agragado al carrito de compras');
        }
        if (isset($carrito[$idProducto])){
            $carrito[$idProducto]['cantidad']++;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('succcess', 'Producto agragado al carrito de compras');
        }

        $carrito[$idProducto] = [
            "nombre" => $productos->nombre,
            "cantidad" => 1,
            "precio" => $productos->precioUnitario
            //"foto" => $productos->si la habilita debe ponerle la coma al anterio
        ];

        session()->put('carrito', $carrito);

        return redirect()->back()->with('succcess', 'Producto agragado al carrito de compras');
    }

    public function agregarAlCarrito($idProducto, $precioUnitario)
    {
        $carro = Carrito::find($idProducto);        
        $productoCarrito = new Carrito;
        $productoCarrito->idProducto = $idProducto;
        $productoCarrito->cantidad = 1;
        $productoCarrito->total = $precioUnitario;
        
        $productoCarrito->save();
        
        return redirect()->back();
        
    }
}
