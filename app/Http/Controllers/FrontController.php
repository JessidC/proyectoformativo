<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Usuario;
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
        $subcategoria = Subcategoria::all();
        $productos = Producto::all();
        return view('front.about', compact('categorias','subcategoria','productos'));
    }
   
    public function vistaProductos($id) 
    {
        
        $productos = Producto::join('subcategoria as s', 's.id_subcategoria', 'producto.id_subcategoria')
        ->where('s.id_subcategoria', $id)
        ->get();
        $subcategoria = Subcategoria::join('producto','producto.id_subcategoria','subcategoria.id_subcategoria');
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        return view ('front.vistaProductos',compact('productos','categorias','subcategoria'));
    }

    public function apiprodxcarrito($id) 
    {
        
        $producto = Producto::findOrFail($id);
        
        return ($producto);

    }

    

    public function vistapreguntas()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        
        return view('front.preguntas', compact('productos','categorias', 'subcategoria') );
    }

    

    public function vCarrito()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        
        return view ('front.carrito',compact('productos','categorias','subcategoria'));
    }

    public function api_detallevprod($id)
    {
        $producto = Producto::findOrFail($id);
        
        return ($producto);
    }

    
    public function vistaperfil()
    
    {
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        $Usuario= Usuario::all();
        
        return view('front.perfil',compact('categorias','subcategoria','Usuario'));
    }



}
