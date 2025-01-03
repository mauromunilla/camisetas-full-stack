@include('admin.layout.sidebar')

    
    
    <div class="container tablaTalles">
        <h1>Panel ABM de Talles</h1>
        <a href="#"><button class="btn btn-link m-3">Agregar nuevo talle</button></a>
        <div class="row">
            <div class="list-group list-group-horizontal col-lg-fluid" id="list-tab" role="tablist">
                @foreach (['1' => 'Hombre', '2' => 'Mujer', '3' => 'Niños', '4' => 'Retro'] as $categoria_id => $categoria_nombre)
                    <a class="list-group-item list-group-item-action @if ($loop->first) active @endif" 
                    id="list-{{ strtolower($categoria_nombre) }}-list" 
                    data-bs-toggle="list" 
                    href="#list-{{ strtolower($categoria_nombre) }}" 
                    role="tab" 
                    aria-controls="list-{{ strtolower($categoria_nombre) }}">
                        {{ $categoria_nombre }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            @foreach (['1' => 'Hombre', '2' => 'Mujer', '3' => 'Niños', '4' => 'Retro'] as $categoria_id => $categoria_nombre)
                <div class="tab-pane fade @if ($loop->first) show active @endif" 
                    id="list-{{ strtolower($categoria_nombre) }}" 
                    role="tabpanel" 
                    aria-labelledby="list-{{ strtolower($categoria_nombre) }}-list">
                    <h3>Camisetas de {{ strtolower($categoria_nombre) }}</h3>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Talle</th>
                                <th>Ancho(cm)</th>
                                <th>Largo(cm)</th>
                                <th>Altura Recomendada(cm)</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($talles as $talle)
                                @if ($talle->categoria_id == $categoria_id)
                                    <tr>
                                        <th>{{ $talle->medida }}</th>
                                        <td>{{ $talle->ancho_talle }}</td>
                                        <td>{{ $talle->largo_talle }}</td>
                                        <td>{{ $talle->altura_recomendada }}</td>
                                        <td>
                                            <div class="button-container">
                                                <a href="/admin/talles/{{$talle->categoria_id}}/edit" class="btn btn-primary">
                                                    <i class="bi bi-pencil-square"> Editar</i>
                                                </a>
                                                <form action="/admin/talles/{{$talle->categoria_id}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-primary"><i class="bi bi-trash"> Borrar</i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

@include('admin.layout.footer')