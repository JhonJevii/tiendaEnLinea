<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Producto;
use App\Categoria;
use App\Caracteristica;
use App\ImageProduct;
use App\ImageCategory;
use App\Carrito;
use Input;

class CreateController extends Controller
{
	
#--------------------------------------------------------------------------------------------
    public function formularioProductos(){

    	$categorias = Categoria::all();
    	$caracteristicas = Caracteristica::all();
        $carrito = Carrito::all()->count();
    	return view('forms.registrarProducto', compact('categorias', 'caracteristicas', 'carrito'));

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
                ImageProduct::create([
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

#---------------------------------------------------------------------------------------------

#---------------------------------------------------------------------------------------------

    public function formularioCategoria(){

    	$categorias = Categoria::all();
    	$caracteristicas = Caracteristica::all();
        $carrito = Carrito::all()->count();
    	return view('forms.registrarCategoria', compact('categorias', 'caracteristicas', 'carrito'));

    }

    public function registrarCategoria(Request $request){
       

        $validatedData = Validator::make($request->all(),
            [
                'imagen'=> 'mimes:jpeg,bmp,png,gif,jfif,mp4|max:5120',
                'nombre' => 'required',
                'descripcion' => 'required',               
                
            ]);

        $categoria = new Categoria;

        $mensaje = 'Categoria registrada correctamente.';

        if($validatedData->fails())
        {
            return redirect()->back()->withInput()->withErrors($validatedData);
        }
        else{
            
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->save();
            if ($request->hasfile('imagen'))
            {

                $file = $request->file('imagen');
                $path = $request->imagen->store('public/fotosCategorias');
                //Storage::disk('public')->delete('\\fotosProductos\\' . $file);
                $ext = $request->file('imagen')->getClientOriginalExtension();
                $archivo = 'imagen-id-' . $categoria->id . '.' . $ext;
                $idCategoria = $categoria->id;
                ImageCategory::create([
                    'path' => $archivo,
                    'idCategoria' => $idCategoria]);

            }
            
            $mensaje = 'Categoria registrada correctamente.';

            return redirect()->back()->with('mensajeVerde', $mensaje);
        }       
    }
#---------------------------------------------------------------------------------------------


}
