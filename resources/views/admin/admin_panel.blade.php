@include('admin.layout.sidebar')
    <div class="container fluid">
        <h1>Panel ABM de productos</h1>
        <button class="btn btn-link">Agregar nuevo producto</button>

        <section class="productos">
            @foreach ($productos as $producto)
                <div class="producto container fluid m-3">
                    <img src="{{$producto->imagen_producto}}" class="card-img-top" alt="...">
                    <div class="descripcionProducto card-body">
                        <h6 id="nombreProducto">Nombre: {{ $producto->nombre_producto }}</h6>
                        <h5 id="precioProducto">Precio: ${{ $producto->precio_producto }}</h5>
                        <h5 id="tallesProducto">
                            <div class="row">  
                                <div class="col-md-1">Talles: </div>
                                @foreach ($producto->talles as $talle)
                                    <div class="cuadradoTalle col-md-1">
                                        {{$talle->medida}}({{ $talle->pivot->cantidad }})
                                    </div>
                                @endforeach
                            </div>
                        </h5>
                        <h5 id="categoriasProducto">
                            <div class="row">
                                <div class="col-md-2">Categorias:  </div>
                                @foreach ($producto->categorias as $categoria)
                                    <div class="cuadradoCategoria col-md-2">
                                        {{$categoria->nombre_categoria}}
                                    </div>
                                @endforeach
                            </div>
                        </h5>
                        <h5 id="destacado">Destacado: {{ ($producto->destacado) ? "Si" : "No" }}</h5>
                    </div>
                    </a>
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-primary">Borrar</a>
                </div>
            @endforeach
        </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>