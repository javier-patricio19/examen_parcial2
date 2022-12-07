<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModificarUsuarioController extends Controller
{
    public function modificar(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:30',
            'email' => "required|unique:users,email,$id|email|max:60",
            'foto' => "image|mimes:jpg,png,jpeg"
        ]);

        $buscar_usuario = User::find($id);
        $buscar_usuario->name = $request->name;
        $buscar_usuario->email = $request->email;
        $buscar_usuario->id_rol = $request->rol;
        if ($request->is_admin == 'true') {
            $buscar_usuario->is_admin = 1;
        } else {
            $buscar_usuario->is_admin = 0;
        }
        if ($request->has("foto")) {
            $nombre_imagen = strtolower(trim($request->name, " ")) . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('imagenes/usuarios', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/usuarios/" . $nombre_imagen;
            $buscar_usuario->image = $ruta_imagen;
        }

        $buscar_usuario->save();

        $msg = "El usuario " . $request->name . " ha sido modificado";
        return redirect($request->session()->get('redirectTo'))->withSuccess($msg);
    }

    public function modificarCuenta(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'name' => 'required|max:30',
            'email' => "required|unique:users,email,$id|email|max:60",
            'foto' => "image|mimes:jpg,png,jpeg"
        ]);

        $buscar_usuario = User::find($id);
        $buscar_usuario->name = $request->name;
        $buscar_usuario->email = $request->email;

        if ($request->has("foto")) {
            $nombre_imagen = strtolower(trim($request->name, " ")) . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('imagenes/usuarios', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/usuarios/" . $nombre_imagen;
            $buscar_usuario->image = $ruta_imagen;
        }

        $buscar_usuario->save();

        $msg = "Su cuenta ha sido modificado con exito";
        return redirect()->route('mi-cuenta')->withSuccess($msg);
    }
}
