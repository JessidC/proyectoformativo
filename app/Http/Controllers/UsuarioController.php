<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function usuario()
    {
        //$Usuario = Usuario::all();
        $usuario= Usuario:: select('users.id as id','name','email','password','documento','telefono','nombre_tipo')
        ->join('tipos as t', 't.id', 'users.tipos_id_tipo')
        ->get();
        return view('usuarios.usuarios', compact('usuario'));
    }
    public function agregar()
    {
        return view('usuarios.agregar');
    }

    public function guardar(Request $request)
    {
            Usuario::create([
            
                'name' => $request->name,
                'documento' => $request->documento,
                'telefono' => $request->telefono,
                'email' => $request->email,
                'password' =>  Hash::make($request->contrasena),
                'tipos_id_tipo' => 4,
                'fidelizacion_id'=> 1,
                'estado'=> 1
            ]);
        return redirect()->route('users');
    }

    public function buscar(Request $request, $id)
    {
            $Usuario = Usuario::findOrFail($id);
            $tipos = Tipo::all();


            return view('usuarios.editar', compact('Usuario','tipos'));
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
