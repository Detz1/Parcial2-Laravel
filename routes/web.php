<?php

use App\Models\Autor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibroCategoriaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ResenaController;
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

Route::resource('usuarios', UsuarioController::class);
Route::resource('autores', AutorController::class);
Route::resource('libros', LibroController::class);
Route::resource('resenas', ResenaController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('libroscategorias', LibroCategoriaController::class);





