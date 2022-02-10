<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


class FrontController extends Controller
{
    public function index()
    {
        $productos = Producto::take(8)->get();
        $categorias = Categoria::all();
        
        return view('welcome', compact('productos','categorias') );
    }
}
