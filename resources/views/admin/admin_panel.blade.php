@include('admin.layout.sidebar')

    @if (session()->has("success"))
        <div class="alert alert-success text-center fixed-top"> {{ session("success") }} </div>
    @endif


    <div class="container fluid">
        <h1>Panel ABM de productos</h1>
        <a href="/admin/producto/create"><button class="btn btn-link">Agregar nuevo producto</button></a>

        <section class="productos full-width">
            @foreach ($productos as $producto)
                <div class="producto container fluid m-3">
                    <img src="{{$producto->imagen_producto}}" class="card-img-top" alt="...">
                    <div class="descripcionProducto card-body">
                        <h6 id="nombreProducto">Nombre: {{ $producto->nombre_producto }}</h6>
                        <h5 id="precioProducto">Precio: ${{ $producto->precio_producto }}</h5>
                        <h5 id="tallesProducto">
                            <div class="row row-cols-auto align-items-center ">
                                <p>Talles: </p>
                                @foreach ($producto->talles as $talle)
                                    <div>
                                        <span class="badge text-bg-secondary">{{$talle->medida}}({{ $talle->pivot->cantidad }})</span>
                                    </div>
                                @endforeach
                            </div>
                        </h5>
                        <h5 id="categoriasProducto">
                            <div class="row row-cols-auto align-items-center ">
                                <p>Categorias: </p>
                                @foreach ($producto->categorias as $categoria)
                                    <div>
                                        <span class="badge text-bg-secondary">{{$categoria->nombre_categoria}}</span>
                                    </div>
                                @endforeach
                            </div>
                        </h5>
                        <h5 id="destacado">Destacado: <i class="{{ ($producto->destacado) ? "bi bi-check-lg" : "bi bi-x-lg" }}"></i></h5>
                    </div>
                    <a href="#" class="btn btn-primary"><i class="bi bi-pencil-square"> Editar</i></a>
                    <form action="/admin/producto/{{$producto->id_producto}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-primary"><i class="bi bi-trash"> Borrar</i></button>
                    </form>
                </div>
            @endforeach
        </section>
    </div>
    
    