@include('layout.header')

<br><br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Contactate</h1>
        <h2 class="text-center mb-4">¡Estamos aquí para ayudarte!</h2>
        <p class="text-center">Completá el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre completo" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</div>

@include('layout.footer')