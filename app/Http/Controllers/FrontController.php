<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Subcategoria;


class FrontController extends Controller
{
    public function index()
    {
        $productos = Producto::take(8)->get();
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        
        return view('welcome', compact('productos','categorias', 'subcategoria') );
    }

    public function info ()
    {
        $categorias = Categoria::all();
        return view('front.about', compact('categorias'));
    }
   
    public function vistaProductos()
    {
        $productos = Producto::all();
        return view ('front.vistaProductos',compact('productos'));
    }
    public function vCarrito()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        
        return view ('front.carrito',compact('productos','categorias','subcategoria'));
    }




}
