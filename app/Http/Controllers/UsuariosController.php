<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = User::all();
        $usuario_actual = Auth::user();
        return view('dashboard', ['usuarios'=>$usuarios, 'usuario_actual'=>$usuario_actual]);
    }
    public function eliminarUsuario($id){
        $usuario_eliminar = User::find($id);
        $eliminar = User::where('id', $id)->delete();
        $msg = "El usuario ".$usuario_eliminar->name." ha sido eliminado";
        return redirect()->back()->withSuccess($msg);


    }
}
