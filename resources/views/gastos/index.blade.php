@include('layout.header')

<main class="container">

    <h1>Gastos</h1>
    <article>
        <p>Crear un nuevo gasto</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('gastos.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>detalle</th>
                    <th>importe</th>
                    <th>fecha</th>
                    <th>fijo</th>
                </thead>
            </tr>

            <tbody>
                @foreach ($gastos as $gasto)
                <tr>
                    <td>
                        {{ $gasto->id }}
                    </td>
                    <td>
                        {{ $gasto->detalle }}
                    </td>
                    <td>
                        $ {{ $gasto->importe }}
                    </td>
                    <td>
                        {{ $gasto->fecha }}
                    </td>
                    <td>
                        {{ $gasto->fijo == 1 ? 'Sí' : 'No' }}
                    </td>
                    <td>
                        <a href="{{ route('gastos.show', $gasto) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('gastos.edit', $gasto) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('gastos.destroy', $gasto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar el gasto {{ $gasto->nombre }}?')">
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