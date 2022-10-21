<?php

use App\Http\Controllers\UsuariosController;
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
    return view('welcome');
});

Route::get('/dashboard', [UsuariosController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/eliminar-usuario/{id}', [UsuariosController::class, 'eliminarUsuario'])->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
