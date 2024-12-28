@include('admin.layout.sidebar')

    @if (session()->has('fail'))
        <div class="container">
            <div class="alert alert-danger text-center"> {{ session("fail") }} </div>
        </div>
    @endif

    <section>
        <div class="register container col-lg-6">
            <div class="row">
                <h2>Agregar Nuevo Admin</h2>
                <form action="/admin/add" method="POST" id="registration-form">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="admin" type="text" class="form-control" id="floatingInput" placeholder="admin" value="{{ old('admin') }}">
                        <label for="floatingInput">Nombre</label>
                        @error('admin')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-1">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Contraseña">
                        <label for="password">Contraseña</label>
                        <div id="passwordHelpBlock" class="form-text">
                            La contraseña debe tener entre 8-20 caracteres.
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
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@include('admin.layout.footer')