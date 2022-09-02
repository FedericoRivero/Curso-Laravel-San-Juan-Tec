@include('layout.header')

<form action="{{ route('perfiles.update', $perfil) }}" method="post" class="container">
    <h1>Editar Perfil</h1>
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{{ $perfil->nombre }}">
    <input type="text" name="apellido" value="{{ $perfil->apellido }}">
    <input type="submit" value="Guardar">
</form>

@include('layout.footer')