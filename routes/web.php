<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Models\Autor;
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

Route::resource('livros', LivroController::class);
Route::resource('autores', AutorController::class)->parameters([
    'autores' => 'autor' 
]);;
Route::resource('biblioteca', BibliotecaController::class);

