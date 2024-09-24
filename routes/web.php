<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\Auth\RegisterController;

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
//    return view('inicio');
//});

Route::get('/', [RegisterController::class , 'index'])->name('inicio');
Route::get('/crear-usuario', [RegisterController::class , 'crear'])->name('crear-usuario');
Route::post('/crear-usuario', [RegisterController::class , 'store'])->name('crear-usuario.store');
Route::get('/edit-usuario/{usuario}', [RegisterController::class , 'editar'])->name('editar-usuario');
Route::put('/edit-usuario/{usuario}', [RegisterController::class , 'update'])->name('editar-usuario');
Route::delete('/edit-usuario/{usuario}', [RegisterController::class , 'destroy'])->name('borrar-usuario');

