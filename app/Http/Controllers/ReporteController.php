<?php

namespace App\Http\Controllers;

use App\Models\reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reportes()
    {
        //$productos = Reporte::all();
        return view('reportes');
    }

}