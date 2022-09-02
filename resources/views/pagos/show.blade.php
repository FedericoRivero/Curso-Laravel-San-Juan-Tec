@include('layout.header')

<main class="container">
    <h5>Pagos</h5>
    <p>{{$pago->fecha}}</p>
    <p>$ {{$pago->monto}}</p>
</main>

@include('layout.footer')