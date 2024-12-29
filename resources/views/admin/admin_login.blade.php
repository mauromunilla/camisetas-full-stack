<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="../css/styles.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>AdminLogin</title>
    </head>
    <body class="fondoLogin align-items-center justify-content-center vh-100">

        @if (session()->has("success"))
            <div class="alert alert-success text-center fixed-top"> {{ session("success") }} </div>
        @endif
        
        <section>
            <div class="container-sm rounded fondoBlanco mx-auto d-block">
                <div class="row justify-content-center ">
                    <div class="imagenLogin rounded col-lg-6 col-md-12 text-center ">
                        <h3 class="tituloLogin">Fulbol <i class="bi bi-shop-window"></i></h3>
                    </div>
                    <div class="login col-lg-6 col-md-12">
                        <div class="titulo"> 
                            <h1 class="my-5 ms-5 fw-bolder"> Login </h1>
                        </div>
                        <form action="/admin/login" method="POST" id="login-form">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="loginNombre" type="text" class="form-control" id="floatingInputGroup1" placeholder="Usuario" value="{{ old('loginNombre') }}">
                                <label for="floatingInputGroup1">Usuario</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="loginPassword" type="password" class="form-control" id="password-login" placeholder="Contraseña">
                                <label for="password-login">Contraseña</label>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="botonLogin btn btn-primary col-lg-11">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>