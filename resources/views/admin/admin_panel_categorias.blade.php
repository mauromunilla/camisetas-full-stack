@include('admin.layout.sidebar')

    @if (session()->has("success"))
    <div class="alert alert-success text-center fixed-top"> {{ session("success") }} </div>
    @endif

    <div class="container fluid">
        <h1>Panel ABM de categorias</h1>
        <a href="/admin/categoria/create"><button class="btn btn-link">Agregar nueva categoria</button></a>

        <section class="productos full-width">
            @foreach ($categorias as $categoria)
                <div class="categoria row row-cols-auto m-3">
                    <div class="descripcionProducto card-body">
                        <h6 id="nombreProducto">Categoria: {{ $categoria->nombre_categoria }}</h6>
                    </div>
                    <a href="/admin/categoria/{{$categoria->id}}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"> Editar</i></a>
                    <form action="/admin/categoria/{{$categoria->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-primary"><i class="bi bi-trash"> Borrar</i></button>
                    </form>
                </div>
            @endforeach
        </section>
    </div>