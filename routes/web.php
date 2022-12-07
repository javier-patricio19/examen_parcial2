<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [CategoriasController::class, 'index'])->name('index');
    Route::get('/mi-cuenta', [UsuariosController::class, 'editarCuenta'])->name('mi-cuenta');
    Route::post('/modificar-cuenta', [ModificarUsuarioController::class, 'modificarCuenta'])->name('modificar-cuenta');
});
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/rol/{rol}', [CategoriasController::class, 'roles'])->name('roles');
    Route::get('/dashboard', [UsuariosController::class, 'index'])->name('dashboard');
    Route::post('/modificar-usuario/{user}', [ModificarUsuarioController::class, 'modificar'])->name('post.modificar');
    Route::get('/editar-usuario/{id}', [UsuariosController::class, 'editarUsuario'])->name('post.editar');
    Route::get('/eliminar-usuario/{id}', [UsuariosController::class, 'eliminarUsuario'])->name('post.eliminar');
    Route::post('/registro', [RegisteredUserController::class, 'registroAdmin'])->name('registro-admin');

    Route::get('/modificar-categoria/{id}', [CategoriasController::class, 'modificarIndex'])->name('modificar-categoria');
});


require __DIR__ . '/auth.php';
