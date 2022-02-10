<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends controller
{
    public function index()
    {
        return view('carrito');
    }

    public function apiCarrito($id)
    {
        if(Auth::user()){
            return "ok";
        }else{
            return "bad";
        }
        
    }
}