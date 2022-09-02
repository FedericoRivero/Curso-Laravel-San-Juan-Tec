@include('layout.header')

<main class="container">

    <h1>Ingresos</h1>
    <article>
        <p>Crear un nuevo ingreso</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('ingresos.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>monto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
            </tr>

            <tbody>
                @foreach ($ingresos as $ingreso)
                <tr>
                    <td>
                        {{ $ingreso->id }}
                    </td>
                    <td>
                        {{ $ingreso->monto }}
                    </td>
                    <td>
                        <a href="{{ route('ingresos.show', $ingreso) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('ingresos.edit', $ingreso) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('ingresos.destroy', $ingreso) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar el ingreso {{ $ingreso->monto }}?')">
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