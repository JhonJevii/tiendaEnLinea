<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Producto;
use App\Categoria;
use App\Caracteristica;
use Input;

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
            if (Input::has('imagen'))
            {

                $archivo = $categoria->imagen;
                Storage::disk('public')->delete('\\fotosProductos\\' . $archivo);

                $file = $request->file('imagen');
                $ext = $request->file('imagen')->getClientOriginalExtension();
                $archivo = 'imagen-id-' . $categoria->id . '.' . $ext;
                $categoria->imagen = strtolower($archivo);
                Storage::disk('public')->put('\\fotosProductos\\' . $archivo, File::get($file));
            }
            
            $categoria->save();

            $mensaje = 'Categoria registrada correctamente.';

            return redirect()->back()->with('mensajeVerde', $mensaje);
        }       
    }
}
