<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class FrontController extends Controller
{
    public function index()
    {
        $productos = Producto::take(8)->get();

        return view('welcome', compact('productos') );
    }
}
