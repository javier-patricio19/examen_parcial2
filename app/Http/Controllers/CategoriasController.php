<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //
    public function index()
    {
        $roles = Rol::all()->keyBy('id');
        return view('categorias', [
            'roles' => $roles
        ]);
    }
}
