@include('layout.header')

<main class="container">

    <h1>Pagos</h1>
    <article>
        <p>Crear un nuevo pago</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('pagos.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>fecha</th>
                    <th>importe</th>
                    {{-- <th>times</th> --}}
                    <th></th>
                </thead>
            </tr>

            <tbody>
                @foreach ($pagos as $pago)
                <tr>
                    <td>
                        {{ $pago->id }}
                    </td>
                    <td>
                        {{ $pago->fecha }}
                    </td>
                    <td>
                        $ {{ $pago->monto }}
                    </td>
                    {{-- <td>
                        {{ $pago->created_at }}
                    </td> --}}
                    <td>
                        <a href="{{ route('pagos.show', $pago) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('pagos.edit', $pago) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('pagos.destroy', $pago) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar el pago {{ $pago->monto }}?')">
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