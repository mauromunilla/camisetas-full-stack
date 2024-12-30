@include('layout.header')

  @if (session()->has("success"))
    <div class="container">
      <div class="alert alert-success text-center"> {{ session("success") }} </div>
    </div>
  @endif

  <section class="carrusel container-fluid col-lg-12 overflow-hidden">
    <div id="SlideCarrusel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/1.png" class="imagenCarrusel d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/2.png" class="imagenCarrusel d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/1.png" class="imagenCarrusel d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#SlideCarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#SlideCarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section id="prodDestacados" class="prodDestacados text-center py-3">
    <h2>Productos Destacados</h2>
    <div class="container-sm py-4">
        <div class="row py-2">
            @foreach ($productosDestacados as $producto)
                <div class="col-xl-3 col-md-6 py-3">
                    <div class="producto">
                        <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre_producto }}">

                        <div class="descripcionProducto card-body">
                            <h5 class="nombreProducto">{{ $producto->nombre_producto }}</h5>
                            <h6 class="precioProducto">$ {{ number_format($producto->precio_producto, 2, ',', '.') }}</h6>
                        </div>

                        <a href="#" class="btn btn-primary">Añadir a carrito</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

  <section class="text-center py-4">
    <div class="nosotros container-sm col-lg-10">
      <h3 class="tituloNos">Sobre Nosotros</h3>
      <p>Somos Tomás Coro, Mauro Munilla, Marco Szapari y Octavio Valiente, estudiantes de Ingeniería en Sistemas de la UTN.</p>
        
      <p>Este proyecto web forma parte de nuestra formación en el curso de desarrollo Full Stack.</p>
         
      <p>Nuestro objetivo es aplicar y consolidar los conocimientos adquiridos, creando soluciones innovadoras y funcionales.</p>  
        
      <p>Nos apasiona la tecnología y el desarrollo de software, y estamos comprometidos con el aprendizaje continuo y la excelencia en cada uno de nuestros proyectos.</p>  
        
      <p>¡Gracias por visitar nuestra página!</p>  
    </div>
  </section>

@include('layout.footer')