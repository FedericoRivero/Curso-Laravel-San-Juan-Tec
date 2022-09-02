@include('layout.header')

<form action="{{ route('pagos.store') }}" method="post" class="container">
    <h1>Pagos</h1>
    @csrf
    <input type="datetime-local" name="fecha" id="fecha" value="{{ old('fecha', date('Y-m-d\TH:i')) }}">
    <input type="number" name="monto" id="monto" value="{{ old('monto') }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')