@include("layout/header")

    <div>
        <a href="/inicio"> Volver a inicio </a>

        <form action="/producto" method="post">
            @csrf
            <label>Imagen:</label><input value="{{ old('imagen_producto') }}" type="file" id="imagen_producto" name="imagen_producto">
            @error('imagen_producto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label>Nombre:</label><input value="{{ old('nombre_producto') }}" type="text" id="nombre_producto" name="nombre_producto" autocomplete="off">
            @error('nombre_producto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label>Talle:</label><input value="{{ old('talle_producto') }}" type="text" id="talle_producto" name="talle_producto" autocomplete="off">
            @error('talle_producto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label>Precio:</label><input value="{{ old('precio_producto') }}" type="text" id="precio_producto" name="precio_producto" autocomplete="off">
            @error('precio_producto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <button>Agregar</button>
        </form>
    </div>

@include("layout/footer")