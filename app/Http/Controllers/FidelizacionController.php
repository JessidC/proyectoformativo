<?php

namespace App\Http\Controllers;

use App\Models\Fidelizaciones;
use Illuminate\Http\Request;

class FidelizacionController extends controller
{
    public function fidelizaciones()
    {
        return view('fidelizaciones');
    }
}