<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //
    public function index()
    {
        $roles = Rol::all()->keyBy('id');
        return view('categorias', ['roles' => $roles]);
    }

    public function roles(Rol $rol)
    {
        $usuarios = User::where('id_rol', $rol->id)->get();
        return view('roles', [
            'rol' => $rol,
            'usuarios' => $usuarios
        ]);
    }

    public function modificarIndex($id)
    {
        $categoria = Rol::find($id);
        return view('editar-categoria', ['categoria' => $categoria]);
    }
}
