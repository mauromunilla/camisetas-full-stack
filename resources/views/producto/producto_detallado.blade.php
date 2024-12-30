@include('layout/header')

<div class="productos">
    <div class="container-sm">
        <div class="row">
            <div class="ImagenProducto col-xl-8 col-sm-fluid">
                <div id="carouselImagenes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($producto->imagenes as $index => $imagen)
                                <button type="button" 
                                    data-bs-target="#carouselImagenes" 
                                    data-bs-slide-to="{{ $index }}" 
                                    class="{{ $index == 0 ? 'active' : '' }}" 
                                    aria-current="{{ $index == 0 ? 'true' : 'false' }}" 
                                    aria-label="Slide {{ $index + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($producto->imagenes as $index => $imagen)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ $imagen->url }}" class="d-block w-100" alt="Imagen del producto">
                                </div>
                            @endforeach
                        </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagenes" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselImagenes" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-sm-fluid">
                <h6 class="nombreProducto" id="nombreProducto"> {{ $producto->nombre_producto }}</h6>
                <h5 class="precioProducto" id="precioProducto">$ {{ $producto->precio_producto }}</h5>
                <form action="">
                    <h4>Talles </h4>
                    @foreach ($producto->talles as $talle)
                        <div class="row row-cols-auto align-items-center " >
                            <div class="form-check form-check-inline col-xl-19 col-lg-8 col-sm-6" >
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="checkboxTalle{{$talle->id}}"
                                    name="talles[]"
                                    value="{{$talle->id}}"
                                    {{ in_array($talle->id, old('talles', [])) ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="checkboxTalle{{$talle->id}}">{{$talle->medida}}</label>
                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-secondary mt-3">Comprar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layout/footer')