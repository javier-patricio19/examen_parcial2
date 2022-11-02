<?php

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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [UsuariosController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/eliminar-usuario/{id}', [UsuariosController::class, 'eliminarUsuario'])->middleware(['auth', 'verified', 'admin'])->name('post.eliminar');
Route::get('/editar-usuario/{id}', [UsuariosController::class, 'editarUsuario'])->middleware(['auth', 'verified', 'admin'])->name('post.editar');
Route::post('/modificar-usuario/{user}', [ModificarUsuarioController::class, 'modificar'])->middleware(['auth', 'verified', 'admin'])->name('post.modificar');


require __DIR__.'/auth.php';
