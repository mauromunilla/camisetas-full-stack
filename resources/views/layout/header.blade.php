<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>EcommerceCamisetas</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header class="text-center sticky-top">
    <div>
        <nav class="navbar navbar-expand-lg sticky-top bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Fulbo <i class="bi bi-shop-window"></i> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/catalogo">Catalogo</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Hombre</a></li>
                            <li><a class="dropdown-item" href="#">Retro</a></li>
                            <li><a class="dropdown-item" href="#">Mujer</a></li>
                            <li><a class="dropdown-item" href="#">Niños</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/guia_talles">Guia Talles</a>
                        </li>
                        <form action="" method="GET" class="d-flex">
                            <input class="form-control me-2" type="text" id="busqueda" name="busqueda" placeholder="Buscar" autocomplete="off">
                            <button class="btn btn-outline-success">Buscar</button>
                        </form> 
                    </ul>
                </div>
                @auth
                    <p class="mensajeBienvenida text-center">¡Bienvenido {{ auth()->user()->nombre }}! </p>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn" type="submit">salir <i class="bi bi-box-arrow-right m1"></i></button>
                    </form>
                @else
                    <button class="btn" type="submit">
                        <a class="nav-link" href="/register" role="button">Iniciar Sesion/Registro</a>
                    </button>
                @endauth
            </div>
        </nav>
    </div>
    <div class="bannerPromos text-center fluid">
        <p>3y6 cuotas s/interes -- 10%OFF Transferencia/Efvo</p>
    </div>

    </header>
    
</body>
</html>