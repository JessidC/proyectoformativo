<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends controller
{
    public function categorias()
    {
        return view('categorias.categorias');
    }
    
}