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

//USUARIOS
Route::get('/usuarios/usuarios', [App\Http\Controllers\UsuarioController::class, 'users'])->name('');

//PRODUCTOS
Route::get('/productos/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');

//CATEGORIAS
Route::get('/categorias/categorias', [App\Http\Controllers\CategoriaController::class, 'categorias'])->name('');

//SUBCATEGORIAS
Route::get('/subcategorias/subcategorias', [App\Http\Controllers\SubcategoriaController::class, 'subcategorias'])->name('');

//PEDIDOS
Route::get('/pedidos/pedidos', [App\Http\Controllers\PedidoController::class, 'pedidos'])->name('');

//OFERTAS
Route::get('/ofertas/ofertas', [App\Http\Controllers\OfertaController::class, 'ofertas'])->name('');

//GARANTIAS
Route::get('/garantias/garantias', [App\Http\Controllers\GarantiaController::class, 'garantias'])->name('');

//REPORTES
Route::get('/reportes', [App\Http\Controllers\ReporteController::class, 'reportes'])->name('');

//FIDELIZACIONES 
Route::get('/fidelizaciones', [App\Http\Controllers\FidelizacionController::class, 'fidelizaciones'])->name('');