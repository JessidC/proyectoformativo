<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function usuario()
    {
        $Usuario = Usuario::all();
        return view('usuarios.usuarios', compact('Usuario'));
    }
    public function agregar()
    {
        return view('usuarios.agregar');
    }

    public function guardar(Request $request)
    {
            Usuario::create([
                'apellido_usuario' => $request->apellido_usuario,
                'name' => $request->name,
                'celular' => $request->celular,
                'usuario' => $request->usuario,
                'contrasena' =>  Hash::make($request->contrasena),
                'documento' => $request->documento,
                'email' => $request->email,
                'tipos_id_tipo' => $request->tipos_id_tipo
            ]);
        return redirect()->route('users');
    }

    public function buscar(Request $request, $id)
    {
            $Usuario = Usuario::findOrFail($id);

            return view('usuarios.editar', compact('Usuario'));
    }

    public function borrar($id)
    {
            $Usuario = Usuario::findOrFail($id);
            $Usuario->delete();
            return redirect()->route('users');
    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $nombre = $request->nombre;

        $Usuario = Usuario::findOrFail($id);
        $Usuario->name = $nombre;
        $Usuario->save();
        return redirect()->route('users');
    }


}
