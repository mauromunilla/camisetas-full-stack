<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Producto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    public function create()
    {
        return view("admin.admin_register");
    }

    public function register(Request $request)
    {
        $datos = $request->validate([
            'admin' => ['required', 'min:5', 'max:20'],
            'password' => ['required','min:8','max:20','confirmed']
        ],
        [
            'admin.required' => 'Este campo es obligatorio',
            'admin.min' => 'El nombre de usuario debe tener mínimo 5 caracteres',
            'admin.max' => 'El nombre de usuario debe tener máximo 20 caracteres',
            'password.required' => 'Este campo es obligatorio',
            'password.min' => 'La contraseña debe tener mínimo 8 caracteres',
            'password.max' => 'La contraseña debe tener máximo 20 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ]);

        $datos['password'] = bcrypt($datos['password']);

        Admin::create($datos);

        return response()->redirectTo("/admin/panel")->with("success", "Se registro al nuevo administrador exitosamente!");
    }

    public function login(Request $request)
    {
        $datos = $request->validate([
            'admin' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt(["nombre" => $datos["loginNombre"], "password" => $datos["loginPassword"]])){
            return response()->redirectTo("/admin/panel")->with("success", "Se inició sesion correctamente!");
        }
        else{
            return response()->redirectTo("/admin/login")->with("fail", "Error al iniciar sesion!");
        }
    }

    public function logout()
    {
        auth()->logout();
        return response()->redirectTo("/admin/login")->with("success", "Se cerro sesion exitosamente!");
    }

    public function productos(Request $request)
    {
        if($request->has("busqueda")){
            $busqueda = $request->busqueda;
            
            $productos = Producto::with(['talles', 'categorias'])->select('nombre_producto')->where('nombre_producto', 'like', "%.$busqueda.%")
            ->groupBy('camiseta_id')
            ->get();
        }
        else{
            $productos = Producto::with(['talles','categorias'])
            ->get();
        }

        $parametros =[
            "productos" => $productos,
        ];
        
        return view('admin.admin_panel', $parametros);
    }
}
