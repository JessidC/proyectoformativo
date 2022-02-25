<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends controller
{
    public function index()
    {
        return view('direcciones/direccion');
    }
}