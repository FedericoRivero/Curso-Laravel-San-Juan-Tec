@include('layout.header')

<main class="container">

    <h1>Items</h1>
    <article>
        <p>Crear un nuevo item</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('items.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>importe</th>
                    <th></th>
                    <th></th>
                </thead>
            </tr>

            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->nombre }}
                    </td>
                    <td>
                        {{ $item->importe }}
                    </td>
                    <td>
                        <a href="{{ route('items.show', $item) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('items.edit', $item) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('items.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar el item {{ $item->nombre }}?')">
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