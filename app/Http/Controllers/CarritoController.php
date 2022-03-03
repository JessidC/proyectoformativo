<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Estado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use App\Models\Pedproduct;
use Exception;

class CarritoController extends controller
{
    public function index()
    {
        return view('front.carrito');
    }

    public function apiCarrito(){

        $user = Auth::user();

        $estado = null;

        if (Auth::user()) {

            $direccion = User::select('id_direccion')
                ->join('direccion as d', 'd.id_usuario', 'users.id')
                 ->where('users.id', $user->id)
                 ->count();

            if ($direccion) {
                $pedidos = User::join('direccion as d', 'd.id_usuario', 'users.id')
                ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                ->where('users.id', $user->id)
                ->where('p.estado', 1)
                ->count();
                if ($pedidos) {
                    return "2"; 
                }else{

                    $direccion = User::select('dir.id_direccion','dir.direccion','dir.barrio','dep.nombre_departamento','mun.nombre_municipio')
                            ->join('direccion as dir', 'dir.id_usuario', 'users.id')
                            ->join('municipio as mun', 'mun.id_municipio', 'dir.id_municipio')
                            ->join('departamento as dep', 'mun.id_departamento', 'dep.id_departamento')
                            ->where('users.id', $user->id)
                            ->get();

                    return $direccion;
                }
            }else {
                return "1"; 
            } 
        }else{
            
            return "0";
        }
    }
         
  


    public function existenteCarrito()
    {
        //$pedidos = pedido::join('direccion','direccion.id_direccion', '=', 'pedidos.id_direccion')->select('id_usuario')->where('id_usuario', )->first();;
        $user = Auth::user();
        if ($user) {

            $pedidos = User::join('direccion as d', 'd.id_usuario', 'users.id')
                ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                ->where('users.id', $user->id)
                ->where('p.estado', 1)
                ->count();
                
            if ($pedidos) {
                
                $pedidos = User::join('direccion as d', 'd.id_usuario', 'users.id')
                ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                ->where('users.id', $user->id)
                ->where('p.estado', 1)
                ->first();

                $productos = Producto::join('pedido_x_producto as pp', 'producto.id_producto', 'pp.id_producto')
                ->where('pp.id_pedido', $pedidos->id_pedidos)
                ->get();
                

                return view('front/carrito', compact('productos','pedidos'));

            } else {
                dd("usted no tiene productos en el carrito");
                // $direccion = User::select('id_direccion')
                // ->join('direccion as d', 'd.id_usuario', 'users.id')
                // ->where('users.id', $user->id)
                // ->first();

                // $pedido = new Pedido();
                // $pedido->id_direccion = $direccion->id_direccion;
                // $pedido->fecha_pedido = now();
                // $pedido->valor_total_factura = 0;
            }

            dd($pedidos);

        } else {
            dd("retornar vista donde se indique que debe estar registrado o almenos la ventana de login");
        }
    }
    public function guardar(Request $request)
    {
        //$data = request()->except('_token');
        //dd($data);
        //$pedidos = pedido::join('direccion','direccion.id_direccion', '=', 'pedidos.id_direccion')->select('id_usuario')->where('id_usuario', )->first();;
        $user = Auth::user();
            $pedidos = User::join('direccion as d', 'd.id_usuario', 'users.id')
                ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                ->where('users.id', $user->id)
                ->where('p.estado', 1)
                ->count();
                
            if ($pedidos) {
                $pedidos = User::select('p.id_pedidos')
                ->join('direccion as d', 'd.id_usuario', 'users.id')
                ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                ->where('users.id', $user->id)
                ->where('p.estado', 1)
                ->first();


                $pedpro = Pedproduct::where('pedido_x_producto.id_producto', $request->idProducto)
                ->count();
                
                if($pedpro){
                    $pedpro = Pedproduct::where('pedido_x_producto.id_producto', $request->idProducto)
                              ->first();

                    $producto = Producto::findOrFail($request->idProducto);
                    $cantidad = (int)($request->cantidad + $pedpro->cantidad);
                    $valor = (int)$producto->valor_actual;

                    $prodPedido =  Pedproduct::findOrFail($pedpro->id_pedido_x_producto);
                    $prodPedido->cantidad += $request->cantidad;
                    $prodPedido->valor_producto_venta = ($valor * $cantidad);
                    $prodPedido->save();

                    $pedProductos = Pedproduct ::where('pedido_x_producto.id_pedido', $pedidos->id_pedidos)->get();
                    $valorFac = 0;

                    foreach($pedProductos as $pedProducto ) {
                        $valorFac += (int)$pedProducto->valor_producto_venta;
                    }

                    $pedido = Pedido::findOrFail($pedidos->id_pedidos);
                    $pedido->valor_total_factura = $valorFac;
                    $pedido->save();

                    return view('welcome');
                
                }else{

                    $pedidos = User::select('p.id_pedidos')
                            ->join('direccion as d', 'd.id_usuario', 'users.id')
                            ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                            ->where('users.id', $user->id)
                            ->where('p.estado', 1)
                            ->first();

                    $producto = Producto::findOrFail($request->idProducto);
                    $cantidad = (int)$request->cantidad;
                    $valor = (int)$producto->valor_actual;

                    $prodPedido = new Pedproduct();
                    $prodPedido->id_pedido = $pedidos->id_pedidos;
                    $prodPedido->id_producto = $request->idProducto;
                    $prodPedido->cantidad = $request->cantidad;
                    $prodPedido->valor_producto_venta = ($valor * $cantidad);
                    $prodPedido->save();

                    $pedProductos = Pedproduct ::where('pedido_x_producto.id_pedido', $pedidos->id_pedidos)->get();
                    $valorFac = 0;

                    foreach($pedProductos as $pedProducto ) {
                        $valorFac += (int)$pedProducto->valor_producto_venta;
                    }

                    $pedido =  Pedido::findOrFail($pedidos->id_pedidos);
                    $pedido->valor_total_factura = $valorFac;
                    $pedido->save();

                    return view('welcome');
                
                
                }
            } else {

                    $pedido = new Pedido();
                    $pedido->id_direccion = $request->idDireccion;
                    $pedido->fecha_pedido = now();
                    $pedido->valor_total_factura = 0;

                    $producto = Producto::findOrFail($request->idProducto);
                    $cantidad = (int)$request->cantidad;
                    $valor = (int)$producto->valor_actual;

                    $pedido->estado = 1;
                    $pedido->valor_total_factura = ($valor * $cantidad);
                    $pedido->save();

                    $pedidos = User::join('direccion as d', 'd.id_usuario', 'users.id')
                             ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
                             ->where('users.id', $user->id)
                             ->where('p.estado', 1)
                             ->first();

                    $prodPedido = new Pedproduct();
                    $prodPedido->id_pedido = $pedidos->id_pedidos;
                    $prodPedido->id_producto = $request->idProducto;
                    $prodPedido->cantidad = $request->cantidad;
                    $prodPedido->valor_producto_venta = ($valor * $cantidad);
                    $prodPedido->save();


                    return view('welcome');
            }
    }
}
