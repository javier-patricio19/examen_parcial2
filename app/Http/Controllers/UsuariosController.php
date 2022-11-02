<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $usuario_actual = Auth::user();
        $roles = Rol::all()->keyBy('id');
        return view('dashboard', [
            'usuarios' => $usuarios,
            'usuario_actual' => $usuario_actual,
            'roles' => $roles
        ]);
    }
    public function eliminarUsuario($id)
    {
        $usuario_eliminar = User::find($id);
        $eliminar = User::where('id', $id)->delete();
        $msg = "El usuario " . $usuario_eliminar->name . " ha sido eliminado";
        return redirect()->back()->withSuccess($msg);
    }
    public function editarUsuario($id)
    {
        $usuario_editar = User::find($id);
        $roles = Rol::all()->keyBy('id');
        return view('editar-usuario', ['usuario_editar' => $usuario_editar, 'roles' => $roles]);
    }
}
