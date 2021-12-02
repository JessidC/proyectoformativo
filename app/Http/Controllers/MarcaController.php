<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends controller
{
    public function marcas()
    {
        $marcas = Marca::all();
        return view('marcas.marcas', compact('marcas'));
    }
    public function agregar()
    {
        return view('marcas.crear');
    }

    public function guardar(Request $request)
    {
            Marca::create([
                'nombre_marcas' => $request->nombre
            ]);

        return redirect()->route('marcas');
    }

    public function buscar(Request $request, $id)
    {
            $marca = Marca::findOrFail($id);

            return view('marcas.editar', compact('marca'));
    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $nombre = $request->nombre;

        $marca = Marca::findOrFail($id);
        $marca->nombre_marcas = $nombre;
        $marca->save();

        return redirect()->route('marcas');
    }


}