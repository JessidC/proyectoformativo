<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Components\Widget\Alert;

class CarritoController extends controller
{
    public function index()
    {
        return view('front.carrito');
    }

    public function apiCarrito($id)
    {

       

        if(Auth::user()){
            $producto = Producto::findOrFail($id);
            return ($producto); 
        }else{
            
            return"error";
          
        }
        
    }



}