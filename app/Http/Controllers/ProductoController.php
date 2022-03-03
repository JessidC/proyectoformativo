<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Subcategoria;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::join('subcategoria','subcategoria.id_subcategoria','producto.id_subcategoria')->get();
        $productos = Producto::join('marcas','marcas.id','producto.marcas_id_marcas')->get();
        $productos = Producto::join('users','users.id','producto.users_id')->get();
        $producto = Auth()->user();
        return view('productos.productos',compact('productos'));

        
    }

    public function agregar()
    {
        $subcategorias=Subcategoria::all();
        $marcas=Marca::all();
        $user_id =User::all();

        return view('productos.crear', compact('subcategorias','marcas','user_id'));
    }

    public function guardar(Request $request)
    {

        Producto::create([
        'id_subcategoria'=> $request->subcategoria,
        'nombre_producto'=> $request->nombre,
        'valor_actual' => $request->valor,
        'cantidad_existente'=> $request->cantidad,
        'descripcion_producto'=> $request->descripcion,
        'imagen_producto'=> $request->imagen,
        'marcas_id_marcas'=> $request->marca,
        'descuento'=> $request->descuento,
        'garantia'=> $request->garantia,
        'users_id'=> $request->usuario,  
        ]);

        return redirect()->route('productos');

    }

    public function buscar(Request $request, $id)
    {       
            $productos = Producto::findOrFail($id);
            $subcategorias = Subcategoria::all();
            $marcas= Marca::all();
            $user_id = User::all();

            return view('productos.editar', compact('productos','subcategorias','marcas','user_id'));
    }

    public function actualizar(Request $request)
    {
        $id=$request->id;
        $subcategorias=$request->subcategoria;   
        $nombre = $request->nombre;
        $valor=$request->valor;
        $cantidad=$request->cantidad;
        $descripcion=$request->descripcion;
        $imagen=$request->imagen;
        $marca=$request->marca;
        $descuento=$request->descuento;
        $garantia=$request->garantia;
        $usuario= Auth::user()->usuario;

        $producto = Producto::findOrFail($id);
        $producto->id_subcategoria = $subcategorias;
        $producto->nombre_producto=$nombre;
        $producto->valor_actual=$valor;
        $producto->cantidad_existente=$cantidad;
        $producto->descripcion_producto=$descripcion;
        $producto->imagen_producto=$imagen;
        $producto->marcas_id_marcas=$marca;
        $producto->descuento=$descuento;
        $producto->garantia=$garantia;
        $producto->users_id=$usuario;
        
        $producto->save();

        return redirect()->route('productos');
    }


    public function api_detalle($id)
    {
        $producto = Producto::findOrFail($id);
        
        return ($producto);
    }


}       
