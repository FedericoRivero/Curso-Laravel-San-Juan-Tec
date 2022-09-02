@include('layout.header')


<main class="container">

    <h1>Categorías</h1>
    <article>
        <p>Crear una nueva categoría</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('categorias.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
            </tr>

            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>
                        {{ $categoria->id }}
                    </td>
                    <td>
                        {{ $categoria->nombre }}
                    </td>
                    <td>
                        <a href="{{ route('categorias.show', $categoria) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar la categoría {{ $categoria->nombre }}?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</main>

@include('layout.footer')