@include('layout.header')

<main class="container">

    <h1>Crea un nuevo gasto</h1>

    <form action="{{ route('gastos.store') }}" method="post">
        @csrf
        <label for="detalle">Detalle</label>
        <input type="text" name="detalle" placeholder="Detalle" value="{{ old('detalle') }}">
        <label for="importe">Importe</label>
        <input type="number" name="importe" step="0.01" placeholder="Importe" value="{{ old('importe') }}">
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" placeholder="Fecha" value="{{ old('fecha') }}">
        <label for="fijo">Es un gasto fijo?</label>
        <span>No</span>
        <input type="hidden" name="fijo" value="0">
        <input type="checkbox" name="fijo" value="1" {{ old('fijo')==1 ? 'checked' : '' }} role="switch">
        <span>Sí</span>

        <br>
        <br>

        <label for="categoria">Categoría</label>
        <select name="categoria_id">
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id')==$categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
            @endforeach
        </select>

        <label for="perfil">Perfil</label>
        <select name="perfil_id">
            @foreach ($perfiles as $perfil)
            <option value="{{ $perfil->id }}" {{ old('perfil_id')==$perfil->id ? 'selected' : '' }}>
                {{ $perfil->nombre }}
            </option>
            @endforeach
        </select>

        <input type="submit" value="Guardar">
    </form>

</main>

@include('layout.footer')