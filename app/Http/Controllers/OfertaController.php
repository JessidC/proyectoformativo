<?php

namespace App\Http\Controllers;

use App\Models\oferta;
use Illuminate\Http\Request;

class OfertaController extends controller
{
    public function ofertas()
    {
        return view('ofertas.ofertas');
    }
    
    public function agregar()
    {
        return view('ofertas.crear');
    }


}