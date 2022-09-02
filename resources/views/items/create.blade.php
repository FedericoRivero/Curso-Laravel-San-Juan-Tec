@include('layout.header')

<form action="{{ route('items.store') }}" method="post">
    @csrf
    <input type="text" name="nombre" id="">
    <input type="number" name="importe" id="">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')