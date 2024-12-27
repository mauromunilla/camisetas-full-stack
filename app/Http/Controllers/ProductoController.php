<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Talle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("busqueda")){

            $busqueda = $request->busqueda;
            
            $productos = Producto::select("id_producto", "nombre_producto", "precio_producto")
            ->where("nombre_producto", "like", "%$busqueda%")
            ->orderBy("nombre_producto", "desc")
            ->get();
        }
        else{
            $productos = Producto::all();
        }

        $categorias = Categoria::all();

        $talles = Talle::all();

        $parametros =[
            "productos" => $productos,
            "categorias" => $categorias,
            "talles" => $talles
        ];
        
        return view('producto.productos', $parametros);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("producto.producto_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "nombre_producto" => "required|unique:camisetas,nombre_producto|max:255",
            "talle_producto" => "required|max:3",
            "precio_producto" => "required|numeric|gt:0",
            "categoria_producto" => "required|max:255",
            "imagen_producto" => "required|mime:jpeg,jpg,png|size:512"
        ], [
            "required" => "Este campo es obligatorio!",
            "precio_producto.required" => "El producto debe tener definido un precio mayor a 0 !",
        ]);

        $producto = Producto::create($validated);

        //DB::insert("INSERT INTO camisetas (nombre_producto, precio_producto, categoria_producto, imagen_producto) VALUES (?,?,?,?)", 
        //    [$request->nombre_producto,
        //    $request->precio_producto,
        //    $request->categoria_producto,
        //    $request->imagen_producto]);

        //DB::insert("INSERT INTO talles (talle) VALUES (?)", [$request->talle]);

        
        return response()->redirectTo("/inicio");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::where("id_producto", "=" , $id)->first();

        if(!$producto){
            abort(404);
        }

        //$productos = DB::table("productos")
            //->select("id_producto as id", "camiseta_id", "talle_id")
            //->where("id", "like", "%.$busqueda.%")
            //->orderBy("id", "desc")
            //->get();

        return view('producto.producto_detallado', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view("producto.producto_edit", ["producto"=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $respuesta = $producto->delete();

        if($respuesta){
            return redirect("/")->with("success", "Se elimino el producto correctamente");
        }
        else{
            return redirect("/")->with("fail", "Hubo un fallo al intentar eliminar el producto");
        }
    }
}
