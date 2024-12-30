<?php

use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\TallesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriasController;

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
    $productosDestacados = Producto::where('destacado', 1)->get();
    return view('inicio', ['productosDestacados' => $productosDestacados]);
});

Route::get('/catalogo', [ProductoController::class, 'index']);
Route::get('/catalogo/filtro', [ProductoController::class, 'filtro'])->name('catalogo.filtro');
Route::get('/catalogo/{producto}', [ProductoController::class, 'show']);
Route::get('/catalogo/{producto}/edit', [ProductoController::class, 'edit']);
Route::get('/guia_talles', [TallesController::class, 'index']);

Route::post('/catalogo', [ProductoController::class, 'store']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/admin/login', [AdminController::class, 'index'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/add', [AdminController::class, 'create'])->middleware('auth:administradores');
Route::post('/admin/add', [AdminController::class, 'register'])->middleware('auth:administradores');

Route::get('/admin/panel', [AdminController::class,'productos'])->middleware('auth:administradores');
Route::get('/admin/producto/create', [ProductoController::class, 'create'])->middleware('auth:administradores');
Route::post('/admin/producto/create', [ProductoController::class, 'store'])->middleware('auth:administradores');
Route::delete('/admin/producto/{producto}', [ProductoController::class, 'destroy'])->middleware('auth:administradores');
Route::get('/admin/producto/{producto}/edit', [ProductoController::class, 'edit'])->middleware('auth:administradores');
Route::put('/admin/producto/{producto}', [ProductoController::class, 'update'])->middleware('auth:administradores');

Route::get('/admin/panel/categorias', [CategoriasController::class, 'index'])->middleware('auth:administradores');
Route::get('/admin/categoria/create', [CategoriasController::class, 'create'])->middleware('auth:administradores');
Route::post('/admin/categoria/create', [CategoriasController::class, 'store'])->middleware('auth:administradores');
Route::delete('/admin/categoria/{categoria}', [CategoriasController::class, 'destroy'])->middleware('auth:administradores');
Route::get('/admin/categoria/{categoria}/edit', [CategoriasController::class, 'edit'])->middleware('auth:administradores');
Route::put('/admin/categoria/{categoria}', [CategoriasController::class, 'update'])->middleware('auth:administradores');

Route::get('/admin/panel/talles', [TallesController::class, 'tabla'])->middleware('auth:administradores');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/medios-pago', function () {
    return view('/medios_pago');
});

Route::get('/preguntas-frecuentes', function () {
    return view('/faq');
});

Route::get('/terminos-condiciones', function () {
    return view('/politicas');
});

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/finalizar', [CarritoController::class, 'finalizar'])->name('carrito.finalizar');