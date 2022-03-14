<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;

class SubcategoriaController extends controller
{
    public function subcategorias()
    {
      
        $subcategorias = Subcategoria::select('subcategoria.estado as estado', 'id_subcategoria', 'nombre_subcategoria', 'nombre_categoria')
        ->join('categoria as c', 'c.id_categoria', 'subcategoria.id_categoria')
        ->get();

        return view('subcategorias.subcategorias', compact('subcategorias'));
    }

    public function agregar()
    {
        return view('subcategorias.crear');
    }

    public function guardar(Request $request)
    {

        Subcategoria::create([
            'nombre_subcategoria' => $request->nombre,
            'id_categoria' => $request->categoria,
            'estado' => 1

        ]);

        return redirect()->route('subca');

    }

    public function buscar(Request $request, $id)
    {
            $subcategorias = Subcategoria::findOrFail($id);
            $categorias = Categoria::all();

            return view('subcategorias.editar', compact('subcategorias','categorias'));
    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $nombre = $request->nombre;
        $categoria= $request->categoria;


        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->nombre_subcategoria = $nombre;
        $subcategoria->id_categoria = $categoria;
        $subcategoria->save();

        return redirect()->route('subca');
    }

        public function eliminar($id)
    {
            $subcategoria = Subcategoria::findOrFail($id);
            
            if ($subcategoria->estado =="1")
                
                $subcategoria->estado = "0";
                
            else
                $subcategoria->estado = "1";
                
            $subcategoria->save();
            

            return redirect()->route('subca');

    }


}
