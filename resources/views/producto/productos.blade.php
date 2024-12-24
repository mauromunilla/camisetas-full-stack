@include('layout/header')

    @include('producto/producto_filtro')

    <section>
        <div class="productos">
            <div class="container-sm">
                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="producto col-xl-3 col-md-6">
                            <a href="catalogo/{{$producto->id_producto}}">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="descripcionProducto card-body">
                                <h6 id="nombreProducto">{{ $producto->camiseta->nombre_producto }}</h6>
                                <h5 id="precioProducto">$ {{ $producto->camiseta->precio_producto }}</h5>
                            </div>
                            </a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@include('layout/footer')