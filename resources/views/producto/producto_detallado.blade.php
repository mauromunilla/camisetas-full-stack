@include('layout/header')

<div class="productos">
    <div class="container-sm">
        <div class="row">
            <div class="ImagenProducto col-xl-8 col-sm-fluid">
                <img src="{{ $producto->imagenes->first()->url }}" class="imagenProducto" alt="...">
            </div>
            <div class="col-xl-4 col-sm-fluid">
                <h6 class="nombreProducto" id="nombreProducto"> {{ $producto->nombre_producto }}</h6>
                <h5 class="precioProducto" id="precioProducto">$ {{ $producto->precio_producto }}</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</div>

@include('layout/footer')