<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TallesController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
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
    return view('inicio');
});

Route::get('/catalogo', [ProductoController::class, 'index']);
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

Route::get('/admin/panel', [AdminController::class,'productos']);
Route::get('/admin/producto/create', [ProductoController::class, 'create']);
Route::post('/admin/producto/create', [ProductoController::class, 'store']);
Route::delete('/admin/producto/{producto}', [ProductoController::class, 'destroy']);

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
