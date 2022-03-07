<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Auth;
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


    public function historialpedidos()
    {
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::all();
        $user=Auth::user ();
 
      
     if($user){

        $pedidos = User::select('id_pedidos','fecha_pedido','valor_total_factura', 'num_factura')
        ->join('direccion as d', 'd.id_usuario', 'users.id')
        ->join('pedidos as p', 'p.id_direccion', 'd.id_direccion')
        ->where('users.id', $user->id)
        ->where('p.estado', 3)
        ->get();

        return view('front.historial', compact('pedidos','categorias','subcategoria'));
        
     }
    
    }

}