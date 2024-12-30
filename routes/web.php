<?php

use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/admin/login', [AdminController::class, 'index']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/add', [AdminController::class, 'create']);
Route::post('/admin/add', [AdminController::class, 'register']);

Route::get('/admin/panel', [AdminController::class,'productos']);
Route::get('/admin/producto/create', [ProductoController::class, 'create']);
Route::post('/admin/producto/create', [ProductoController::class, 'store']);
Route::delete('/admin/producto/{producto}', [ProductoController::class, 'destroy']);
Route::get('/admin/producto/{producto}/edit', [ProductoController::class, 'edit']);
Route::put('/admin/producto/{producto}', [ProductoController::class, 'update']);

Route::get('/admin/panel/categorias', [CategoriasController::class, 'index']);
Route::get('/admin/categoria/create', [CategoriasController::class, 'create']);
Route::post('/admin/categoria/create', [CategoriasController::class, 'store']);
Route::delete('/admin/categoria/{categoria}', [CategoriasController::class, 'destroy']);
Route::get('/admin/categoria/{categoria}/edit', [CategoriasController::class, 'edit']);
Route::put('/admin/categoria/{categoria}', [CategoriasController::class, 'update']);

Route::get('/admin/panel/talles', [TallesController::class, 'tabla']);

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
