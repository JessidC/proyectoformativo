<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class CategoriaController extends controller
{
    public function categorias()
    {
        $categorias = Categoria::all();
        return view('categorias.categorias', compact('categorias'));
    }
    public function agregar()
    {
        return view('categorias.crear');
    }

    public function guardar(Request $request)
    {
        
            $categoria = Categoria::create([
                'nombre_categoria' => $request->nombre,
                'estado' => 1
            ]);
            

        return redirect()->route('categorias');
    }

    public function buscar(Request $request, $id)
    {
            $categoria = Categoria::findOrFail($id);

            return view('categorias.editar', compact('categoria'));
    }

    public function borrar($id)
    {
            $categoria = Categoria::findOrFail($id);
            
            if ($categoria->estado == "1")
                
                $categoria->estado = "0";
                
            else
                $categoria->estado = "1";
                
            $categoria->save();
            

            return redirect()->route('categorias');

    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $nombre = $request->nombre;

        $categoria = Categoria::findOrFail($id);
        $categoria->nombre_categoria = $nombre;
        $categoria->save();

        return redirect()->route('categorias');
    }


}
