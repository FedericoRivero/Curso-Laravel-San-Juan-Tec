@include('layout.header')

<form action="{{ route('ingresos.update', $ingreso) }}" method="post" class="container">
    <h1>Editando ingreso</h1>
    @csrf
    @method('PUT')
    <input type="number" name="monto" id="" value="{{ old('monto', $ingreso->monto) }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')