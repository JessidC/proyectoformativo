<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
            Categoria::create([
                'nombre_categoria' => $request->nombre
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
            $categoria->delete();

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
