<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Caracteristica;
use App\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Input;

class ProductsController extends Controller
{
    public function verProductos(){

    	$productos = Producto::all();
    	return view('inicio', compact('productos'));
        //jhonn

    }

    public function tablaProductos(){

    	$categorias = Categoria::all();
    	$caracteristicas = Caracteristica::all();
    	return view('registrarProducto', compact('categorias', 'caracteristicas'));

    }

    public function registrarProductos(Request $request){

        $validatedData = Validator::make($request->all(),
            [
                'categoria' => 'required',
                'caracteristicas' => 'required',
                'imagen'=> 'mimes:jpeg,bmp,png,gif,jfif,mp4|max:5120',
                'nombre' => 'required',
                'descripcionProducto' => 'required',
                'oferta' => 'required',
                'precioUnitario' => 'required',
                'precioAbsoluto' => 'required',
            ]);

        $producto = new Producto;

        $mensaje = 'Producto registrado correctamente.';

        if($validatedData->fails())
        {
            return redirect()->back()->withInput()->withErrors($validatedData);
        }
        else{
            $producto->idCategoria = $request->categoria;
            $producto->idCaracteristica = $request->caracteristicas;
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcionProducto;
            $producto->oferta = $request->oferta;
            $producto->precioUnitario = $request->precioUnitario;
            $producto->precioAbsoluto = $request->precioAbsoluto;

            $producto->save();

            if ($request->hasfile('imagen'))
            {
                $file = $request->file('imagen');
                $path = $request->imagen->store('public/fotosProductos');
                //Storage::disk('public')->delete('\\fotosProductos\\' . $file);
                $ext = $request->file('imagen')->getClientOriginalExtension();
                $archivo = 'imagen-id-' . $producto->id . '.' . $ext;
                $idProducto = $producto->id;
                Image::create([
                    'path' => $archivo,
                    'idProducto' => $idProducto]);

                /*

                $archivo = $producto->imagen;
                Storage::disk('public')->delete('\\fotosProductos\\' . $archivo);

                $file = $request->file('imagen');
                $ext = $request->file('imagen')->getClientOriginalExtension();
                $archivo = 'foto-id-' . $producto->id . '.' . $ext;
                $producto->imagen = strtolower($imagen);
                Storage::disk('public')->put('\\fotosProductos\\' . $archivo, File::get($file));*/

            }

            return redirect()->back()->with('mensajeVerde', $mensaje);
        }
        

    }
}
