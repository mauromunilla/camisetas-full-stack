@include('admin.layout.sidebar')

    <div class="container-fluid mb5">
        <div class="mt3">
            <a href="/admin/panel" class="btn btn-secondary m3"> Volver a inicio </a>
        </div>
        <div class="row fluid">

                <form action="/admin/producto/create" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label"></label>
                        <input class="form-control" type="file" id="formFileMultiple" name="imagen_producto" value="{{ old('imagen_producto') }}" multiple >
                        @error('imagen_producto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input name="nombre_producto" type="text" class="form-control" id="nombre_producto" placeholder="Producto" value="{{ old('nombre_producto') }}">
                        <label for="nombre_producto">Producto</label>
                        @error('nombre_producto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input name="precio_producto" type="text" class="form-control" id="precio_producto" placeholder="Precio" value="{{ old('precio_producto') }}">
                        <label for="precio_producto">Precio</label>
                        @error('precio_producto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="btn-check" name="destacado" id="destacado" autocomplete="off" value="1"{{ old('destacado') == '1' ? 'checked' : '' }}>
                        <label class="btn btn-outline-success" for="destacado">Destacar</label>
                    </div>
                    <br>
                    <h4>Talles </h4>
                        @foreach ($talles as $talle)
                            <div class="row align-items-center">
                                <div class="form-group col-xl-2 col-lg-3 col-sm-5">
                                    <label for="cantidad{{$talle->id}}">Stock</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="cantidad[{{$talle->id}}]"
                                        id="cantidad{{$talle->id}}"
                                        value="{{ old('cantidad.' . $talle->id) }}"
                                        min="0"
                                    >
                                </div>
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
                    <br>
                    <br>
                    <h4>Categorias</h4>             <!-- ver bootstrap multiselect -->
                    <div class="row row-cols-auto gx3">
                        @foreach ($categorias as $categoria)
                            <div>
                                <input 
                                    class="form-check-input"
                                    type="checkbox" 
                                    id="checkboxCategoria{{$categoria->id}}" 
                                    name="categorias[]" value="{{$categoria->id}}" 
                                    {{ in_array($categoria->id, old('categorias', [])) ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="checkboxCategoria{{$categoria->id}}">{{$categoria->nombre_categoria}}</label>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary pt3">Agregar</button>
                </form>
            </div>
        </div>

@include('admin.layout.footer')