<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class PqrsController extends controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
        
    }*/
    public function pecu ()
    {
        $pqrs = new Pqrs();
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        $pqrs = $pqrs::all();
        return view('front.pqrs', compact('pqrs','categorias','subcategoria'));
    }

    public function epqrs(Request $request)
    {
        $pqrs = new Pqrs();
        

        $pqrs->nombre_pqrs = $request->nombre_pqrs;
        $pqrs->descripcion_pqrs = $request->descripcion_pqrs;
        $pqrs->id_usuario = auth()->id();
        
        
        $pqrs->save();
   
        return view('front.pqrs', compact('pqrs'));
      
        
        
    }


}

