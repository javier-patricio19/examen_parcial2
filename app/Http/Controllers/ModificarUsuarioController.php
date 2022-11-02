<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class ModificarUsuarioController extends Controller
{
    public function modificar(Request $request, $id)
    {
        // dd('modificar usuario ', $id);

        $request->validate([
            'name' => 'required|max:30',
            'email' => "required|unique:users,email,$id|max:60"
        ]);

        $buscar_usuario = User::find($id);
        $buscar_usuario->name = $request->name;
        $buscar_usuario->email = $request->email;
        $buscar_usuario->rol_id = $request->rol;
        if ($request->is_admin == 'true') {
            $buscar_usuario->is_admin = 1;
        } else {
            $buscar_usuario->is_admin = 0;
        }
        $buscar_usuario->save();

        $msg = "El usuario " . $request->name . " ha sido modificado";
        return redirect()->route('dashboard')->withSuccess($msg);;
    }
}
