<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $pedidos= Pedido::all();
        $pedidos= Pedido:: join('direccion','direccion.id_direccion','pedidos.id_direccion')->get();

        return view('home',compact('pedidos'));
    }

    public function getUser()
    {
        return redirect ('');
    }

}
