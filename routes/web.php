<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ModificarUsuarioController;
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


Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/', [CategoriasController::class, 'index'])->name('index');
    Route::get('/rol/{tipo}', [CategoriasController::class, 'roles'])->name('roles');
    Route::get('/dashboard', [UsuariosController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::post('/modificar-usuario/{user}', [ModificarUsuarioController::class, 'modificar'])->name('post.modificar');
    Route::get('/editar-usuario/{id}', [UsuariosController::class, 'editarUsuario'])->name('post.editar');
    Route::get('/eliminar-usuario/{id}', [UsuariosController::class, 'eliminarUsuario'])->name('post.eliminar');
});

require __DIR__ . '/auth.php';
