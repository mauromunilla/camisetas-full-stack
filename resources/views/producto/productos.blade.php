@include('layout/header')

@include('producto/producto_filtro')

<section>
    <div class="productos">
        <div class="container-sm">
            @if($productos->isEmpty())
                <div class="alert alert-warning" role="alert">
                    No se encontraron productos según los filtros seleccionados.
                </div>
            @else
                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="producto col-xl-3 col-md-6">
                            <a href="catalogo/{{$producto->id_producto}}">
                                @if( $producto->imagenes->first())
                                    <img src="{{ $producto->imagenes->first()->url }}" class="imagenProducto" alt="...">
                                @endif
                                <div class="descripcionProducto card-body">
                                    <h6 id="nombreProducto">{{ $producto->nombre_producto }}</h6>
                                    <h5 id="precioProducto">$ {{ $producto->precio_producto }}</h5>
                                    <div class="talles-container">
                                        @foreach ($producto->talles as $talle)
                                            <button type="button" class="btn btn-primary mb-1" disabled> {{ $talle->medida }} </button>
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="btn btn-primary mb-2">Comprar</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

@include('layout/footer')