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
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'users'])->name('usuarios');

//PRODUCTOS
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');
Route::get('/productos/agregar', [App\Http\Controllers\ProductoController::class, 'agregar'])->name('pro.agregar');

//CATEGORIAS
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'categorias'])->name('categorias');
Route::get('/categorias/agregar', [App\Http\Controllers\CategoriaController::class, 'agregar'])->name('cat.agregar');
Route::post('/categorias/crear', [App\Http\Controllers\CategoriaController::class, 'guardar'])->name('cat.guardar');
Route::get('/categorias/{id?}/editar', [App\Http\Controllers\CategoriaController::class, 'buscar'])->name('cat.buscar');
Route::get('/categorias/{id?}/borrar', [App\Http\Controllers\CategoriaController::class, 'borrar'])->name('cat.borrar');
Route::post('/categorias/actualizar', [App\Http\Controllers\CategoriaController::class, 'actualizar'])->name('cat.actualizar');

//SUBCATEGORIAS
Route::get('/subcategorias', [App\Http\Controllers\SubcategoriaController::class, 'subcategorias'])->name('subca');
Route::get('/subcategorias/agregar', [App\Http\Controllers\SubcategoriaController::class, 'agregar'])->name('sub.agregar');
Route::post('/subcategorias/crear', [App\Http\Controllers\SubcategoriaController::class, 'guardar'])->name('sub.guardar');
Route::get('/subcategorias/{id?}/editar', [App\Http\Controllers\SubcategoriaController::class, 'buscar'])->name('sub.buscar');
Route::get('/subcategorias/{id?}/borrar', [App\Http\Controllers\SubcategoriaController::class, 'borrar'])->name('sub.borrar');
Route::post('/subcategorias/actualizar', [App\Http\Controllers\SubcategoriaController::class, 'actualizar'])->name('sub.actualizar');

//PEDIDOS
Route::get('/pedidos', [App\Http\Controllers\PedidoController::class, 'pedidos'])->name('');

//OFERTAS
Route::get('/ofertas', [App\Http\Controllers\OfertaController::class, 'ofertas'])->name('ofertas');
Route::get('/ofertas/agregar', [App\Http\Controllers\OfertaController::class, 'agregar'])->name('ofer.agregar');

//GARANTIAS
Route::get('/garantias', [App\Http\Controllers\GarantiaController::class, 'garantias'])->name('');

//REPORTES
Route::get('/reportes', [App\Http\Controllers\ReporteController::class, 'reportes'])->name('');

//FIDELIZACIONES
Route::get('/fidelizaciones', [App\Http\Controllers\FidelizacionController::class, 'fidelizaciones'])->name('');
