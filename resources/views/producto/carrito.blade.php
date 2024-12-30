@include('layout.header')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (!empty($carrito))
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Talle</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carrito as $id => $item)
                    <tr>
                        <td>
                            @if ($item['imagen'])
                                <img src="{{ $item['imagen'] }}" alt="{{ $item['nombre'] }}" style="width: 50px;">
                            @endif
                            {{ $item['nombre'] }}
                        </td>
                        <td>${{ $item['precio'] }}</td>
                        <td>{{ $item['talle'] }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ $item['precio'] * $item['cantidad'] }}</td>
                        <td>
                            <form action="{{ route('carrito.eliminar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $id }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total: ${{ $total }}</h3>
        <form action="{{ route('carrito.finalizar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Finalizar Compra</button>
        </form>
    @else
        <p>Tu carrito está vacío.</p>
    @endif
</div>
@include('layout.footer')
