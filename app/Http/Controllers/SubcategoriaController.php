<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends controller
{
    public function subcategorias()
    {
        return view('subcategorias.subcategorias');
    }

}






