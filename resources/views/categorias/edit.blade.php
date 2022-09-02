@include('layout.header')

<form action="{{ route('categorias.update', $categoria) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" id="" value="{{ old('nombre', $categoria->nombre) }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')