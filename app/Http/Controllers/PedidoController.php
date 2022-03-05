<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use PDF; 
use Illuminate\Http\Request;

class PedidoController extends controller
{
    public function pedidos()
    {
        $pedidos= Pedido::all();
        $pedidos= Pedido:: join('direccion','direccion.id_direccion','pedidos.id_direccion')->get();
        
        return view('pedidos.pedidos', compact('pedidos'));


    }


    public function pdf(Request $request, $id)
    {  
        //$pedidos = pedido::all();
        $pedidos = Pedido::findOrFail($id);
        $pdf = PDF::loadView('pedidos.pdf', ['pedidos'=>$pedidos]);//['pedidos'=>$pedidos]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream('CompraSegura.pdf');

        //return view('pedidos.pdf',  compact('pedidos'));
    }

    

    public function pdf1()
    {
      
       //$pedidos= Pedido:: join('direccion','direccion.id_direccion','pedidos.id_direccion')->get();
       $pedidos = Pedido::all();
       //$pedidos = array('id_pedidos'=>'havcssam');


       //view()->share('pdf',$pedidos);
       $pdf = PDF::loadView('pedidos.pdf1', ['pedidos'=>$pedidos]);
       return $pdf->download('pdf_file.pdf');
          
    }
}