@include('layout/header')

    @if (session()->has('fail'))
    <div class="container">
        <div class="alert alert-danger text-center"> {{ session("fail") }} </div>
      </div>
    @endif

    <section>
        <div class="container">
            <div class="row">
                <div class="login container col-lg-6">

                    <h2>Iniciar Sesion</h2>
                    <form action="/login" method="POST" id="login-form">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="loginNombre" type="text" class="form-control" id="floatingInputGroup1" placeholder="Usuario" value="{{ old('loginNombre') }}">
                            <label for="floatingInputGroup1">Usuario</label>
                            @error('loginNombre')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="loginPassword" type="password" class="form-control" id="password-login" placeholder="Contraseña">
                            <label for="password-login">Contraseña</label>
                            @error('loginPassword')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2 col-11 mx-auto mb-5">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </form>
                </div>

                <div class="register container col-lg-6">
                    <h2>Registrarse</h2>
                    <form action="/register" method="POST" id="registration-form">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="nombre" type="text" class="form-control" id="floatingInputGroup2" placeholder="Usuario" value="{{ old('nombre') }}">
                            <label for="floatingInputGroup2">Usuario</label>
                            @error('nombre')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com" value="{{ old('email') }}">
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-1">
                            <input name="password" type="password" class="form-control" id="password" placeholder="Contraseña">
                            <label for="password">Contraseña</label>
                            <div id="passwordHelpBlock" class="form-text">
                                Tu contraseña debe tener entre 8-20 caracteres.
                            </div>
                            @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password_confirmation" type="password" class="form-control" id="password-confirm" placeholder="Confirmar contraseña">
                            <label for="password-confirm">Confirmar contraseña</label>
                        </div>
                        <div class="d-grid gap-2 col-11 mx-auto">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@include('layout/footer')