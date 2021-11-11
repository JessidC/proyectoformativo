<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends controller
{
    public function categorias()
    {
        $categorias = Categoria::all();
        return view('categorias.categorias', compact('categorias'));
    }
    public function agregar()
    {
        return view('categorias.crear');
    }
    
}