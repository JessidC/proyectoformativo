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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USUARIOS
Route::get('/usuarios/usuarios', [App\Http\Controllers\UsuarioController::class, 'users'])->name('usuarios');

//PRODUCTOS
Route::get('/productos/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');
Route::get('/productos/agregar', [App\Http\Controllers\ProductoController::class, 'agregar'])->name('pro.agregar');

//CATEGORIAS
Route::get('/categorias/categorias', [App\Http\Controllers\CategoriaController::class, 'categorias'])->name('categorias');
Route::get('/categorias/agregar', [App\Http\Controllers\CategoriaController::class, 'agregar'])->name('cat.agregar');
Route::post('/categorias/crear', [App\Http\Controllers\CategoriaController::class, 'guardar'])->name('cat.guardar');
Route::get('/categorias/{id?}/editar', [App\Http\Controllers\CategoriaController::class, 'buscar'])->name('cat.buscar');
Route::post('/categorias/actualizar', [App\Http\Controllers\CategoriaController::class, 'actualizar'])->name('cat.actualizar');

//SUBCATEGORIAS
Route::get('/subcategorias/subcategorias', [App\Http\Controllers\SubcategoriaController::class, 'subcategorias'])->name('');

//PEDIDOS
Route::get('/pedidos/pedidos', [App\Http\Controllers\PedidoController::class, 'pedidos'])->name('');

//OFERTAS
Route::get('/ofertas/ofertas', [App\Http\Controllers\OfertaController::class, 'ofertas'])->name('ofertas');
Route::get('/ofertas/agregar', [App\Http\Controllers\OfertaController::class, 'agregar'])->name('ofer.agregar');

//GARANTIAS
Route::get('/garantias/garantias', [App\Http\Controllers\GarantiaController::class, 'garantias'])->name('');

//REPORTES
Route::get('/reportes', [App\Http\Controllers\ReporteController::class, 'reportes'])->name('');

//FIDELIZACIONES 
Route::get('/fidelizaciones', [App\Http\Controllers\FidelizacionController::class, 'fidelizaciones'])->name('');