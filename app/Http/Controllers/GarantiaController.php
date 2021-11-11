<?php

namespace App\Http\Controllers;

use App\Models\Garantia;
use Illuminate\Http\Request;

class GarantiaController extends controller
{
    public function garantias()
    {
        return view('garantias.garantias');
    }
}