@include('layout/header')

    <div>
        <h2 class="tituloGuia text-center pb-3">Guia de Talles</h2>
    </div>

    <div class="container tablaTalles">
        <div class="row">
            <div class="list-group list-group-horizontal col-lg-fluid" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Hombre</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Retro</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Mujer</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Niños</a>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h3>Camisetas de hombre</h3>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Talle</th>
                            <th>Ancho(cm)</th>
                            <th>Largo(cm)</th>
                            <th>Altura Recomendada(cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($talles as $talle)
                                @if ($talle->categoria_id == "1")
                                    <tr>
                                        <th>{{$talle->medida}}</th>
                                        <td>{{$talle->ancho_talle}}</td>
                                        <td>{{$talle->largo_talle}}</td>
                                        <td>{{$talle->altura_recomendada}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </select>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h3>Camisetas retro</h3>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Talle</th>
                            <th>Ancho(cm)</th>
                            <th>Largo(cm)</th>
                            <th>Altura Recomendada(cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($talles as $talle)
                                @if ($talle->categoria_id == "4")
                                    <tr>
                                        <th>{{$talle->medida}}</th>
                                        <td>{{$talle->ancho_talle}}</td>
                                        <td>{{$talle->largo_talle}}</td>
                                        <td>{{$talle->altura_recomendada}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </select>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <h3>Camisetas de mujer</h3>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Talle</th>
                            <th>Ancho(cm)</th>
                            <th>Largo(cm)</th>
                            <th>Altura Recomendada(cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($talles as $talle)
                                @if ($talle->categoria_id == "2")
                                    <tr>
                                        <th>{{$talle->medida}}</th>
                                        <td>{{$talle->ancho_talle}}</td>
                                        <td>{{$talle->largo_talle}}</td>
                                        <td>{{$talle->altura_recomendada}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </select>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <h3>Camisetas para niños</h3>
                <table class="table table-sm table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Talle</th>
                            <th>Ancho(cm)</th>
                            <th>Largo(cm)</th>
                            <th>Altura Recomendada(cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($talles as $talle)
                                @if ($talle->categoria_id == "3")
                                    <tr>
                                        <th>{{$talle->medida}}</th>
                                        <td>{{$talle->ancho_talle}}</td>
                                        <td>{{$talle->largo_talle}}</td>
                                        <td>{{$talle->altura_recomendada}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </select>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@include('layout/footer')