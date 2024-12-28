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
    <h2>Destacados</h2>
    <div class="container-sm">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="producto">
            <img src="..." class="card-img-top" alt="...">
            <div class="descripcionProducto card-body">
              <h5 class="nombreProducto" id="nombreProducto">Nombre Item1</h5>
              <h6 class="precioProducto" id="precioProducto"> $..</h6>
                  <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                  <label class="btn btn-secondary" for="option1">XS</label>
                  <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                  <label class="btn btn-secondary" for="option2">S</label>

                  <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                  <label class="btn btn-secondary" for="option3">M</label>

                  <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                  <label class="btn btn-secondary" for="option4">L</label>

                  <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                  <label class="btn btn-secondary" for="option5">XL</label>
            </div>
            <a href="#" class="btn btn-primary">Añadir a carrito</a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="producto">
            <img src="..." class="card-img-top" alt="...">
            <div class="descripcionProducto card-body">
              <h5 class="nombreProducto" id="nombreProducto">Nombre Item1</h5>
              <h6 class="precioProducto" id="precioProducto"> $..</h6>
                  <input type="radio" class="btn-check" name="options" id="option6" autocomplete="off">
                  <label class="btn btn-secondary" for="option6">XS</label>
                  <input type="radio" class="btn-check" name="options" id="option7" autocomplete="off">
                  <label class="btn btn-secondary" for="option7">S</label>

                  <input type="radio" class="btn-check" name="options" id="option8" autocomplete="off">
                  <label class="btn btn-secondary" for="option8">M</label>

                  <input type="radio" class="btn-check" name="options" id="option9" autocomplete="off">
                  <label class="btn btn-secondary" for="option9">L</label>

                  <input type="radio" class="btn-check" name="options" id="option10" autocomplete="off">
                  <label class="btn btn-secondary" for="option10">XL</label>
            </div>
            <a href="#" class="btn btn-primary">Añadir a carrito</a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="producto">
            <img src="..." class="card-img-top" alt="...">
            <div class="descripcionProducto card-body">
              <h5 class="nombreProducto" id="nombreProducto">Nombre Item1</h5>
              <h6 class="precioProducto" id="precioProducto"> $..</h6>
                  <input type="radio" class="btn-check" name="options" id="option11" autocomplete="off">
                  <label class="btn btn-secondary" for="option11">XS</label>
                  <input type="radio" class="btn-check" name="options" id="option12" autocomplete="off">
                  <label class="btn btn-secondary" for="option12">S</label>

                  <input type="radio" class="btn-check" name="options" id="option13" autocomplete="off">
                  <label class="btn btn-secondary" for="option13">M</label>

                  <input type="radio" class="btn-check" name="options" id="option14" autocomplete="off">
                  <label class="btn btn-secondary" for="option14">L</label>

                  <input type="radio" class="btn-check" name="options" id="option15" autocomplete="off">
                  <label class="btn btn-secondary" for="option15">XL</label>
            </div>
            <a href="#" class="btn btn-primary">Añadir a carrito</a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="producto">
            <img src="..." class="card-img-top" alt="...">
            <div class="descripcionProducto card-body">
              <h5 class="nombreProducto" id="nombreProducto">Nombre Item1</h5>
              <h6 class="precioProducto" id="precioProducto"> $..</h6>
                  <input type="radio" class="btn-check" name="options" id="option16" autocomplete="off">
                  <label class="btn btn-secondary" for="option16">XS</label>
                  <input type="radio" class="btn-check" name="options" id="option17" autocomplete="off">
                  <label class="btn btn-secondary" for="option17">S</label>

                  <input type="radio" class="btn-check" name="options" id="option18" autocomplete="off">
                  <label class="btn btn-secondary" for="option18">M</label>

                  <input type="radio" class="btn-check" name="options" id="option19" autocomplete="off">
                  <label class="btn btn-secondary" for="option19">L</label>

                  <input type="radio" class="btn-check" name="options" id="option20" autocomplete="off">
                  <label class="btn btn-secondary" for="option20">XL</label>
            </div>
            <a href="#" class="btn btn-primary">Añadir a carrito</a>
          </div>
        </div>
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