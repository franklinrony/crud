<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriaApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index']);

Route::resource('categorias',CategoriaController::class);
Route::resource('productos',ProductoController::class);
Route::get('/api/categorias', [CategoriaApiController::class,'index']);
