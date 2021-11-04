<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        //$productos = Producto::all();
        return view('producto.productos');
    }

    public function ofertas()
    {
        return view('producto.ofertas');
    }

    public function categorias()
    {
        return view('producto.categorias');
    }

    public function subcategorias()
    {
        return view('producto.subcategorias');
    }

    public function garantias()
    {
        return view('producto.garantias');
    }

}
