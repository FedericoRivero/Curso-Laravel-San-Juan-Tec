@include('layout.header')

<form action="{{ route('pagos.update', $pago) }}" method="post" class="container">
    <h1>Editar pago</h1>
    @csrf
    @method('PUT')
    <input type="date" name="fecha" value="{{ $pago->fecha }}">
    <input type="number" name="monto" value="{{ $pago->monto }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')