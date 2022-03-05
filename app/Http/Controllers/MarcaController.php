<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Estado;
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
        $estado = Estado::where('estado','=','activo')->first();
            Marca::create([
                'nombre_marcas' => $request->nombre,
                'estado_a_i_id' => $estado->id
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

    public function eliminar($id)
    {

        $marca = Marca::findOrFail($id);
        if ($marca->estado == 1)
            $marca->estado = 0;
        else
            $marca->estado = 1;
        $marca->save();

        return redirect()->route('marcas');
    }

}
