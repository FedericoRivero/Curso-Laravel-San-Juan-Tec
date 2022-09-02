@include('layout.header')

<form action="{{ route('items.update', $item) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" id="" value="{{ old('nombre', $item->nombre) }}">
    <input type="number" name="importe" id="" value="{{ old('importe', $item->importe) }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')