<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Imagen;
use App\Models\Producto;
use App\Models\Talle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $categorias = Categoria::orderBy('nombre_categoria', 'asc')->get();
        $talles = Talle::all();

        $parametros = [
            "categorias" => $categorias,
            "talles" => $talles
        ];

        return view("admin.admin_producto_create", $parametros);
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
            "nombre_producto" => "required|unique:productos,nombre_producto|max:255",
            "precio_producto" => "required|numeric|gt:0",
            'imagen_producto' => "nullable|array",
            'imagen_producto.*' => "mimes:jpeg,jpg,png,webp|max:5120",
            'destacado' => 'nullable|boolean',
            'talles' => 'nullable|array',
            'categorias' => 'nullable|array',
            'cantidad' => 'nullable|array',
            'cantidad.*' => 'nullable|numeric|min:0'
        ], [
            "nombre_producto.required" => "Este campo es obligatorio!",
            "precio_producto.required" => "El producto debe tener definido un precio mayor a 0 !",
        ]);


        if($validated){

            $producto = Producto::create($validated);

            if ($request->hasFile('imagen_producto')) {
                foreach ($request->file('imagen_producto') as $image) {
                    $path = $image->store('imagenes', 'public');
                    $url = Storage::url($path);

                    Imagen::create([
                        'producto_id' => $producto->id_producto,
                        'url' => $url,
                    ]);
                }
            }

            if ($request->has('categorias')) {
                $producto->categorias()->sync($request->input('categorias'));
            }

            if ($request->has('talles')) {
                $talles = $request->input('talles');
                $cantidadTalle = $request->input('cantidad', []);
                
                $pivotData = [];
                foreach ($talles as $talleId) {
                    $cantidad = isset($cantidadTalle[$talleId]) ? $cantidadTalle[$talleId] : 0;
                    $pivotData[$talleId] = ['cantidad' => $cantidad];
                }
        
                $producto->talles()->sync($pivotData);
            }
            
            return response()->redirectTo("/admin/panel")->with("success", "Producto creado exitosamente!");
        }
        else{
            return response()->redirectTo("/admin/panel/create")->with("fail", "Error al crear el producto!");
        }
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
    public function edit($id)
    {
        $producto = Producto::with(['talles', 'categorias'])->where('id_producto', $id)->first();

        if (!$producto) {
            return redirect()->route('/admin/panel')->with('fail', 'Producto no encontrado.');
        }

        $categorias = Categoria::all();
        $talles = Talle::all();

        $parametros = [
            "producto" => $producto,
            "categorias" => $categorias,
            "talles" => $talles
        ];

        return view("admin.admin_producto_edit", $parametros);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Producto $producto, Request $request)
    {
        $validated = $request->validate([
            'nombre_producto' => "required|max:255",
            'precio_producto' => "required|numeric|gt:0",
            'imagen_producto' => "nullable|array",
            //'imagen_producto.*' => "mimes:jpeg,jpg,png,webp|max:5120",
            'destacado' => 'nullable|boolean',
            'talles' => 'nullable|array',
            'categorias' => 'nullable|array',
            'cantidad_talle' => 'nullable|array',
            'cantidad_talle.*' => 'nullable|numeric|min:0'
        ], [
            "nombre_producto.required" => "Este campo es obligatorio!",
            "precio_producto.required" => "El producto debe tener definido un precio mayor a 0 !",
        ]);

        $producto->nombre_producto = $validated["nombre_producto"];
        $producto->precio_producto = $validated["precio_producto"];
        $producto->destacado = $validated["destacado"] ?? false;

        if($validated){
            if ($request->hasFile('imagen_producto')) {

                $producto->imagenes()->delete();

                foreach ($request->file('imagen_producto') as $image) {
                    $path = $image->store('imagenes', 'public');
                    $url = Storage::url($path);

                    Imagen::create([
                        'producto_id' => $producto->id_producto,
                        'url' => $url,
                    ]);
                }
            }

            $producto->save();

            if ($request->has('cantidad') && $request->has('talles')) {
                foreach ($request->input('talles') as $talle_id) {
                    $cantidad = $request->input('cantidad.' . $talle_id);
                    $talle = Talle::find($talle_id);
                    if ($talle) {
                        $talle->productos()->updateExistingPivot($producto->id_producto, ['cantidad' => $cantidad]);
                    }
                }
            }

            if ($request->has('categorias')) {
                $producto->categorias()->sync($request->input('categorias'));
            }
        }

        return response()->redirectTo('/admin/panel')->with('success', 'Producto actualizado correctamente.');
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
            return redirect("/admin/panel")->with("success", "Se elimino el producto correctamente");
        }
        else{
            return redirect("/admin/producto/create")->with("fail", "Hubo un fallo al intentar eliminar el producto");
        }
    }

    public function filtro(Request $request)
    {
        $precioMin = $request->input('precio_min', 0); 
        $precioMax = $request->input('precio_max', 100000); 
        $categorias = $request->input('categorias', []); 
        $talles = $request->input('talles', []); 

        $query = Producto::query();

        // Filtrar por rango de precios
        $query->whereBetween('precio_producto', [$precioMin, $precioMax]);

        // Filtrar por categorías (si están seleccionadas)
        if (!empty($categorias)) {
            $query->whereHas('categorias', function ($query) use ($categorias) {
                $query->whereIn('categoria_id', $categorias);
            });
        }

        // Filtrar por talles (si están seleccionados)
        if (!empty($talles)) {
            $query->whereHas('talles', function ($query) use ($talles) {
                $query->whereIn('talle_id', $talles);
            });
        }

        $productos = $query->get();

        $categorias = Categoria::all();

        $talles = Talle::all();

        $parametros =[
            "productos" => $productos,
            "categorias" => $categorias,
            "talles" => $talles
        ];
        
        return view('producto.productos', $parametros);        
    }
}
