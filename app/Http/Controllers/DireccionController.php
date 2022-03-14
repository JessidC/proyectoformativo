<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DireccionController extends controller
{
    public function index()
    {
        
        $direccion=Direccion::join('users as us', 'us.id','direccion.id_usuario')
        ->join('municipio as mun', 'mun.id_municipio', 'direccion.id_municipio')
        ->get();
        
        // $municipio= Municipio::join('municipio as mun','mun.id_municipio','direccion.id_municipio')->get();

        
        
        return view('direcciones.direccion', compact('direccion'));

     }
     public function buscar($id)
     {       
            $direccion=Direccion::join('municipio as mun', 'mun.id_municipio','direccion.id_municipio')
                       -> where('direccion.id_direccion',$id)
                       -> first();

            $municipios = Municipio::all();
             return view('direcciones.editar', compact('direccion', 'municipios'));
     }
 
     

     public function update(Request $request)
     {

         $id = $request->id;
         $dir = $request->direccion;
         $barrio = $request->barrio;
         $municipio = $request->municipio;

         $direccion = Direccion::findOrFail($id);
         $direccion->direccion = $dir;
         $direccion->barrio = $barrio;
         $direccion->id_municipio =  $municipio;
         $direccion->save();

         return redirect()->route('direccion');

     }


 

    }
