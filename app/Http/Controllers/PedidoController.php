<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends controller
{
    public function pedidos()
    {
        return view('pedidos/pedidos');
    }
}