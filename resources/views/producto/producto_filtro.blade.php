    <section class="container pb-4">
        <div class="d-flex align-items-center">
            <button class="botonFiltro btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                Filtrar <i class="bi bi-funnel"></i>
            </button>
        
            <a href="/catalogo" class="btn btn-secondary ms-3">Restablecer filtros</a> 
        </div>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasExampleLabel">Filtros</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <form method="GET" action="/catalogo/filtro">
                    <div class="container">
                        <!-- Rango de precios -->
                        <label class="rangoPrecios"><h6>Rango precios</h6></label>
                        <div>
                            <div class="price-input">
                                <div class="price-field">
                                    <label class="form-label">Mínimo</label>
                                    <input type="number" name="precio_min" class="min-input form-control" value="0">
                                </div>
                                <div class="price-field">
                                    <label class="form-label">Máximo</label>
                                    <input type="number" name="precio_max" class="max-input form-control" value="100000">
                                </div>
                            </div>
                        </div>
                
                        <!-- Categorías -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Categorias
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @foreach ($categorias as $categoria)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categorias[]" value="{{ $categoria->id }}" id="flexCheckCategorias{{ $categoria->id }}">
                                                <label class="form-check-label" for="flexCheckCategorias{{ $categoria->id }}">
                                                    {{ $categoria->nombre_categoria }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Talles -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Talles
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    @foreach ($talles as $talle)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="talles[]" value="{{ $talle->id }}" id="flexCheckTalles{{ $talle->id }}">
                                            <label class="form-check-label" for="flexCheckTalles{{ $talle->id }}">
                                                {{ $talle->medida }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                
                        <!-- Botón Buscar -->
                        <div class="row">
                            <button type="submit" class="btn btn-light mt-3 fluid">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <script type="text/javascript" src="./js/main.js"></script>