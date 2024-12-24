<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'min:3', 'max:12'],
            'email' => ['required','email:rfc,dns'],
            'password' => ['required','min:8','max:20','confirmed']
        ],
        [
            'nombre.required' => 'Este campo es obligatorio',
            'nombre.min' => 'El nombre de usuario debe tener mínimo 3 caracteres',
            'nombre.max' => 'El nombre de usuario debe tener máximo 12 caracteres',
            'email.required' => 'Este campo es obligatorio',
            'email.email' => 'Se debe introducir un email válido',
            'password.required' => 'Este campo es obligatorio',
            'password.min' => 'La contraseña debe tener mínimo 8 caracteres',
            'password.max' => 'La contraseña debe tener máximo 20 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ]);

        $datos['password'] = bcrypt($datos['password']);

        User::create($datos);

        return response()->redirectTo("/")->with("success", "Se registro exitosamente!");
    }

    public function login(Request $request)
    {
        $datos = $request->validate([
            'loginNombre' => ['required'],
            'loginPassword' => ['required']
        ],
        [
            'loginNombre.required' => 'Este campo es obligatorio',
            'loginPassword.required' => 'Este campo es obligatorio',
        ]);

        if(auth()->attempt(["nombre" => $datos["loginNombre"], "password" => $datos["loginPassword"]])){
            return response()->redirectTo("/")->with("success", "Se inició sesion correctamente!");
        }
        else{
            return response()->redirectTo("/register")->with("fail", "Error al iniciar sesion!");
        }
    }

    public function logout()
    {
        auth()->logout();
        return response()->redirectTo("/");
    }
}
