@include('layout.header')

<form action="{{ route('etiquetas.store') }}" method="post">
    @csrf
    <input type="text" name="nombre" id="">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')