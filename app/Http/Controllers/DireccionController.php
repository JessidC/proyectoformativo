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
        
        $direccion=Direccion::join('users as us', 'us.id','direccion.id_usuario')->get();
        
        $municipio= Municipio::join('municipio as mun','mun.id_municipio','direccion.id_municipio')->get();
        
        return view('direcciones.direccion', compact('direccion','municipio'));

     }
     public function buscar(Request $request, $id)
     {       
            //  
            $direccion=Direccion::join('municipio as mun', 'mun.id_municipio','direccion.id_municipio')
                       -> where('direccion.id_direccion',$id)
                       -> first();

                    //    dd($direccion);
             return view('direcciones.editar', compact('direccion'));
     }
 
     public function actualizar(Request $request)
     {
         $id=$request->id;
         $id_usuario=$request->id_usuario;   
         $direccion = $request->direccion;
         $barrio=$request->barrio;
         $id_municipio=$request->id_municipio;


         $direccion = Direccion::findOrFail($id);

        $direccion->id_usuario = $id_usuario;
        $direccion->direccion = $direccion;
        $direccion->barrio = $barrio;
        $direccion->id_municipio = $id_municipio;
       
 
         $direccion->save();
 
         return redirect()->route('direccion');
 
     
     }


 

    }
