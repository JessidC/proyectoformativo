<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;

class SubcategoriaController extends controller
{
    public function subcategorias()
    {
        $subcategorias = Subcategoria::join('categoria', 'categoria.id_categoria', 'subcategoria.id_categoria')->get();

        return view('subcategorias.subcategorias', compact('subcategorias'));
    }

    public function agregar()
    {
        $categorias = Categoria::all();
        return view('subcategorias.crear', compact('categorias'));
    }

    public function guardar(Request $request)
    {

        Subcategoria::create([
            'nombre_subcategoria' => $request->nombre,
            'id_categoria' => $request->categoria,

        ]);

        return redirect()->route('subca');

    }

    public function buscar(Request $request, $id)
    {
            $subcategoria = Subcategoria::findOrFail($id);

            return view('subcategorias.editar', compact('subcategoria'));
    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $nombre = $request->nombre;

        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->nombre_subcategoria = $nombre;
        $subcategoria->save();

        return redirect()->route('subcategorias');
    }

    public function eliminar($id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->delete();
        return redirect()->route('subcategorias');
    }



}






