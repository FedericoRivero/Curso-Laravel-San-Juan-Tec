@include('layout.header')

<form action="{{ route('etiquetas.update', $etiqueta) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" id="" value="{{ old('nombre', $etiqueta->nombre) }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')