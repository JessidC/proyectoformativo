<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfil_us;


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

//Route::get('/', function () {
    //return view('welcome');
//});


//FRONT
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('welcome');
Route::get('/front/about', [App\Http\Controllers\FrontController::class, 'info'])->name('info');
Route::get('/front/tecnologia', [App\Http\Controllers\FrontController::class, 'catTecno'])->name('tecno');
Route::get('/front/preguntas', [App\Http\Controllers\FrontController::class, 'vistapreguntas'])->name('preguntas');
Route::post('/front/preguntas/{id?}', [App\Http\Controllers\ProductoController::class, 'api_detalle'])->name('prov.api.detalle');
Route::resource('perfil',perfil_us::class)->middleware('auth');
//VISTA PRODUCTOS
Route::get('/front/vistaproductos/{id?}', [App\Http\Controllers\FrontController::class, 'vistaProductos'])->name('vProductos');
Route::post('/front/vistaproductos/{id?}', [App\Http\Controllers\FrontController::class, 'apiprodxsub'])->name('api.prodxcap');
Route::post('/front/vistaproductos/{id?}', [App\Http\Controllers\FrontController::class, 'api_detallevprod'])->name('pro.api.detalle2');
//PQRS

Route::get('/front/pqrs', [App\Http\Controllers\PqrsController::class, 'pecu'])->name('pecu');
Route::post('/front/pqrs', [App\Http\Controllers\PqrsController::class, 'epqrs'])->name('pqrs.epqrs');

// Route::get('/front/carrito', [App\Http\Controllers\FrontController::class, 'vCarrito'])->name('carrito');
Route::get('/front/otros', [App\Http\Controllers\FrontController::class, 'catOtro'])->name('otros');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USUARIOS

Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'usuario'])->name('users');
Route::get('/usuarios/agregar', [App\Http\Controllers\UsuarioController::class, 'agregar'])->name('usu.agregar');
Route::post('/usuarios/crear', [App\Http\Controllers\UsuarioController::class, 'guardar'])->name('usu.guardar');
Route::get('/usuarios/{id?}/editar', [App\Http\Controllers\UsuarioController::class, 'buscar'])->name('usu.buscar');
Route::get('/usuarios/{id?}/borrar', [App\Http\Controllers\UsuarioController::class, 'borrar'])->name('usu.borrar');
Route::post('/usuarios/actualizar', [App\Http\Controllers\UsuarioController::class, 'actualizar'])->name('usu.actualizar');
//Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('user');
//Route::get('/users/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
//Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

//PRODUCTOS
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');
Route::get('/productos/agregar', [App\Http\Controllers\ProductoController::class, 'agregar'])->name('pro.agregar');
Route::post('/productos/crear', [App\Http\Controllers\ProductoController::class, 'guardar'])->name('pro.guardar');
Route::get('/productos/{id?}/editar', [App\Http\Controllers\ProductoController::class, 'buscar'])->name('pro.buscar');
Route::get('/productos/{id?}/borrar', [App\Http\Controllers\ProductoController::class, 'borrar'])->name('pro.borrar');
Route::get('/productos/actualizar', [App\Http\Controllers\ProductoController::class, 'actualizar'])->name('pro.actualizar');
Route::post('/productos/{id?}', [App\Http\Controllers\ProductoController::class, 'api_detalle'])->name('pro.api.detalle');
Route::get('Productos/exportar', [App\Http\Controllers\ProductoController::class, 'exportar'])->name('productos.exportar');


//CARRITO

Route::get('/front/carrito', [App\Http\Controllers\CarritoController::class, 'index'])->name('cart');
Route::post('/apicarrito', [App\Http\Controllers\CarritoController::class, 'apiCarrito'])->name('apicarrito');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'existenteCarrito'])->name('existenteCarrito');
Route::post('/carrito/guardar', [App\Http\Controllers\CarritoController::class, 'guardar'])->name('cart.guardar');
Route::post('/carrito/eliminar', [App\Http\Controllers\CarritoController::class, 'eliminar'])->name('cart.eliminar');
Route::post('/carrito/reducir', [App\Http\Controllers\CarritoController::class, 'reducir'])->name('cart.reducir');
Route::post('/carrito/incrementar', [App\Http\Controllers\CarritoController::class, 'incrementar'])->name('cart.incrementar');
//CATEGORIAS

Route::get('/categorias/categorias', [App\Http\Controllers\CategoriaController::class, 'categorias'])->name('categorias');
Route::get('/categorias/agregar', [App\Http\Controllers\CategoriaController::class, 'agregar'])->name('cat.agregar');
Route::post('/categorias/crear', [App\Http\Controllers\CategoriaController::class, 'guardar'])->name('cat.guardar');
Route::get('/categorias/{id?}/editar', [App\Http\Controllers\CategoriaController::class, 'buscar'])->name('cat.buscar');
Route::get('/categorias/{id?}/borrar', [App\Http\Controllers\CategoriaController::class, 'borrar'])->name('cat.borrar');
Route::post('/categorias/actualizar', [App\Http\Controllers\CategoriaController::class, 'actualizar'])->name('cat.actualizar');

//SUBCATEGORIAS
Route::get('/subcategorias/subcategorias', [App\Http\Controllers\SubcategoriaController::class, 'subcategorias'])->name('subca');
Route::get('/subcategorias/agregar', [App\Http\Controllers\SubcategoriaController::class, 'agregar'])->name('sub.agregar');
Route::post('/subcategorias/crear', [App\Http\Controllers\SubcategoriaController::class, 'guardar'])->name('sub.guardar');
Route::get('/subcategorias/{id?}/editar', [App\Http\Controllers\SubcategoriaController::class, 'buscar'])->name('sub.buscar');
Route::get('/subcategorias/{id?}/eliminar', [App\Http\Controllers\SubcategoriaController::class, 'eliminar'])->name('sub.eliminar');
Route::post('/subcategorias/actualizar', [App\Http\Controllers\SubcategoriaController::class, 'actualizar'])->name('sub.actualizar');

//MARCAS
Route::get('/marcas/marcas', [App\Http\Controllers\MarcaController::class, 'marcas'])->name('marcas');
Route::get('/marcas/agregar', [App\Http\Controllers\MarcaController::class, 'agregar'])->name('mar.agregar');
Route::post('/marcas/crear', [App\Http\Controllers\MarcaController::class, 'guardar'])->name('mar.guardar');
Route::get('/marcas/{id?}/editar', [App\Http\Controllers\MarcaController::class, 'buscar'])->name('mar.buscar');
Route::get('/marcas/{id?}/eliminar', [App\Http\Controllers\MarcaController::class, 'eliminar'])->name('mar.eliminar');
Route::post('/marcas/actualizar', [App\Http\Controllers\MarcaController::class, 'actualizar'])->name('mar.actualizar');


//DIRECCIONES
Route::get('/Direcciones', [App\Http\Controllers\DireccionController::class, 'index'])->name('direccion');
Route::get('/Direcciones/{id?}/editar', [App\Http\Controllers\DireccionController::class, 'buscar'])->name('dir.buscar');
Route::put('/Direcciones/', [App\Http\Controllers\DireccionController::class, 'update'])->name('dir.actualizar');

//PEDIDOS
Route::get('/pedidos/pedidos', [App\Http\Controllers\PedidoController::class, 'pedidos'])->name('pedidos');
Route::get('/pedidos/{id?}/pdf', [App\Http\Controllers\PedidoController::class, 'pdf'])->name('pedidos.pdf');
Route::get('/pedidos/pdf1', [App\Http\Controllers\PedidoController::class, 'pdf1'])->name('pedidos.pdf1');
Route::get('/front/historial', [App\Http\Controllers\PedidoController::class, 'historialpedidos'])->name('historialpedidos')->middleware('auth');
//OFERTAS
Route::get('/ofertas', [App\Http\Controllers\OfertaController::class, 'ofertas'])->name('ofertas');
Route::get('/ofertas/agregar', [App\Http\Controllers\OfertaController::class, 'agregar'])->name('ofer.agregar');

//GARANTIAS
Route::get('/garantias', [App\Http\Controllers\GarantiaController::class, 'garantias'])->name('');

//REPORTES
Route::get('/reportes', [App\Http\Controllers\ReporteController::class, 'reportes'])->name('');

//FIDELIZACIONES
Route::get('/fidelizaciones', [App\Http\Controllers\FidelizacionController::class, 'fidelizaciones'])->name('');

//APIMOVILE
Route::resource('apimovile', ApiMovileController::class);

//DIRECCIONES
Route::get('/Direcciones/direccion', [App\Http\Controllers\DireccionController::class, 'index'])->name('direccion');
Route::get('/Direcciones/{id?}/editar', [App\Http\Controllers\DireccionController::class, 'buscar'])->name('dir.buscar');
