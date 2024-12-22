<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
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
Route::get('/catalogo/create', [ProductoController::class, 'create']);
Route::get('/catalogo/{producto}', [ProductoController::class, 'show']);
Route::get('/catalogo/{producto}/edit', [ProductoController::class, 'edit']);

Route::post('/catalogo', [ProductoController::class, 'store']);

Route::post('/login', [UsuarioController::class, 'login']);
