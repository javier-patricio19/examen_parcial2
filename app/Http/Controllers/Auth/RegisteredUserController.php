<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'foto' => "image|mimes:jpg,png,jpeg",
        ]);

        if ($request->has("foto")) {
            $nombre_imagen = strtolower(trim($request->name, " ")) . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('imagenes/usuarios', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/usuarios/" . $nombre_imagen;
        } else {
            $ruta_imagen = 'imagenes/default/usuario_default.jpg';
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $ruta_imagen,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function registroAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'foto' => "image|mimes:jpg,png,jpeg",
        ]);

        if ($request->has("foto")) {
            $nombre_imagen = strtolower(trim($request->name, " ")) . "." . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('imagenes/usuarios', $nombre_imagen, 'public');
            $ruta_imagen = "storage/imagenes/usuarios/" . $nombre_imagen;
        } else {
            $ruta_imagen = 'imagenes/usuario_default.jpg';
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_rol' => $request->rol,
            'image' => $ruta_imagen,
        ]);

        $msg = "El usuario " . $request->name . " ha sido registrado";
        return redirect($request->session()->get('redirectTo'))->withSuccess($msg);
    }
}
