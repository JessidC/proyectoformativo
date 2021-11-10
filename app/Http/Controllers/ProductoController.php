<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.productos',compact('productos'));
    }

    public function agregar()
    {
        return view('productos.crear');
    }

}
