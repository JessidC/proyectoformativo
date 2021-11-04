<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nando', function () {
    return view('nando');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');


Route::get('/ofertas', [App\Http\Controllers\ProductoController::class, 'ofertas'])->name('');


Route::get('/categorias', [App\Http\Controllers\ProductoController::class, 'categorias'])->name('');

Route::get('/subcategorias', [App\Http\Controllers\ProductoController::class, 'subcategorias'])->name('');

Route::get('/garantias', [App\Http\Controllers\ProductoController::class, 'garantias'])->name('');

Route::get('/reportes', [App\Http\Controllers\ReporteController::class, 'reportes'])->name('');

Route::get('/pedidos', [App\Http\Controllers\PedidoController::class, 'pedidos'])->name('');

Route::get('/fidelizaciones', [App\Http\Controllers\FidelizacionController::class, 'fidelizaciones'])->name('');


//USUARIOS






//PRODUCTOS
