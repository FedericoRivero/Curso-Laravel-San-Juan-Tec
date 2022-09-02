@include('layout.header')


<form action="{{ route('ingresos.store') }}" method="post" class="container">
    <h1>Ingresos</h1>
    @csrf
    <input type="number" name="monto" id="">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')