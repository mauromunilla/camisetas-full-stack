@include('admin.layout.sidebar')

    @if (session()->has("fail"))
            <div class="alert alert-danger text-center fixed"> {{ session("fail") }} </div>
    @endif

    <div class="container-fluid mb5">
        <br>
        <h3>Editar categoria</h3>
        <br>
        <div class="row fluid">
            <form action="/admin/categoria/{{$categoria->id}}" method="post" >
                @csrf
                @method("PUT")
                <div class="form-floating col-lg-4 col-md-6">
                    <input 
                        name="nombre_categoria" 
                        type="text" 
                        class="form-control" 
                        id="nombre_categoria" 
                        placeholder="Producto" 
                        value={{ old('nombre_categoria', $categoria->nombre_categoria) }}
                        >
                    <label for="nombre_producto">Nombre Categoria</label>
                    @error('nombre_categoria')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-secondary">Modificar</button>
                    <a href="/admin/panel/categorias" class="btn btn-secondary"> Volver a categorias </a>
                </div>
            </form>
        </div>
    </div>

@include('admin.layout.footer')