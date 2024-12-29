<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
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
            
            $categorias = Categoria::select("id", "nombre_categoria")
            ->where("nombre_categoria", "like", "%$busqueda%")
            ->orderBy("nombre_producto", "desc")
            ->get();
        }
        else{
            $categorias = Categoria::all();
        }

        return view('admin.admin_panel_categorias', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_categoria_create');
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
            "nombre_categoria" => "required|unique:categorias,nombre_categoria|max:50",
        ], [
            "nombre_categoria.required" => "Este campo es obligatorio!",
            "nombre_categoria.unique" => "El nombre de la categoria debe ser diferente a una ya existente!",
            "nombre_categoria.max" => "El nombre de la categoria es demasiado largo!",
        ]);

        if($validated)
        {
            Categoria::create($validated);
        }

        return response()->redirectTo("/admin/panel/categorias")->with('success', 'Se creó correctamente la nueva categoría!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::where('id', $id)->first();

        return view('admin.admin_categoria_edit', ["categoria" => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Categoria $categoria, Request $request)
    {
        $validated = $request->validate([
            "nombre_categoria" => "required|unique:categorias,nombre_categoria|max:50",
        ], [
            "nombre_categoria.required" => "Este campo es obligatorio!",
            "nombre_categoria.unique" => "El nombre de la categoria debe ser diferente a una ya existente!",
            "nombre_categoria.max" => "El nombre de la categoria es demasiado largo!",
        ]);

        if($validated)
        {
            $categoria->nombre_categoria = $validated["nombre_categoria"];
            $categoria->save();
        }

        return response()->redirectTo("/admin/panel/categorias")->with('success', 'Se modificó correctamente la categoría!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $respuesta = $categoria->delete();

        if($respuesta){
            return redirect("/admin/panel/categorias")->with("success", "Se elimino la categoria correctamente");
        }
        else{
            return redirect("/admin/panel/categorias")->with("fail", "Hubo un fallo al intentar eliminar la categoria");
        }
    }
}
