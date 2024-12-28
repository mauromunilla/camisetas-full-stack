@include('layout.header')

<main class="container mt-5">
    <h2 class="text-center mb-4">Medios de Pago</h2>
    <p class="text-center mb-5">Aceptamos una amplia variedad de medios de pago para tu comodidad.</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col text-center">
            <div class="card h-100">
                <i class="lab la-cc-mastercard"></i>
                <div class="card-body">
                    <h5 class="card-title">Tarjetas de Crédito</h5>
                    <p class="card-text">Visa, MasterCard, American Express, entre otras.</p>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card h-100">
                <i class="las la-credit-card"></i>
                <div class="card-body">
                    <h5 class="card-title">Tarjetas de Débito</h5>
                    <p class="card-text">Aceptamos las principales tarjetas de débito.</p>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card h-100">
                <i class="las la-exchange-alt"></i>
                <div class="card-body">
                    <h5 class="card-title">Transferencias Bancarias</h5>
                    <p class="card-text">Realiza transferencias desde tu banco de preferencia.</p>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card h-100">
                <i class="las la-wallet"></i>
                <div class="card-body">
                    <h5 class="card-title">Billeteras Virtuales</h5>
                    <p class="card-text">Mercado Pago, PayPal, y otras billeteras digitales.</p>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card h-100">
                <i class="las la-money-bill"></i>
                <div class="card-body">
                    <h5 class="card-title">Efectivo</h5>
                    <p class="card-text">Paga en efectivo en puntos habilitados como Rapipago y Pago Fácil.</p>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card h-100">
                <i class="lab la-bitcoin"></i>
                <div class="card-body">
                    <h5 class="card-title">Criptomonedas</h5>
                    <p class="card-text">Aceptamos Bitcoin, Ethereum y otras criptomonedas.</p>
                </div>
            </div>
        </div>
    </div>
</main>

{{-- <style>
    main i {
        font-size: 30px;
        color:dodgerblue;
    }
</style> --}}


@include('layout.footer')