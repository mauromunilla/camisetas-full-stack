<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TallesController;
use App\Http\Controllers\UserController;
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
Route::get('/guia_talles', [TallesController::class, 'index']);

Route::post('/catalogo', [ProductoController::class, 'store']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);