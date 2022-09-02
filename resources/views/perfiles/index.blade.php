@include('layout.header')

<main class="container">

    <h1>Perfiles</h1>
    <article>
        <p>Crear un nuevo perfil</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('perfiles.create') }}'">
            +
        </button>
    </article>

    <div style="display: flex;">
        <table style=" width: 100%; border-collapse: collapse; font-size: 20px;">
            <tr>
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    {{-- <th>times</th> --}}
                    <th></th>
                </thead>
            </tr>

            <tbody>
                @foreach ($perfiles as $perfil)
                <tr>
                    <td>
                        {{ $perfil->id }}
                    </td>
                    <td>
                        {{ $perfil->nombre }}
                    </td>
                    <td>
                        {{ $perfil->apellido }}
                    </td>
                    {{-- <td>
                        {{ $pago->created_at }}
                    </td> --}}
                    <td>
                        <a href="{{ route('perfiles.show', $perfil) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('perfiles.edit', $perfil) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('perfiles.destroy', $perfil) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar el perfil {{ $perfil->nombre }}?')">
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