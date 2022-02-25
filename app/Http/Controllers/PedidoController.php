<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends controller
{
    public function pedidos()
    {
        $pedidos= Pedido::all();
        $pedidos= Pedido:: join('direccion','direccion.id_direccion','pedidos.id_direccion')->get();
        
        return view('pedidos.pedidos', compact('pedidos'));
    }
}