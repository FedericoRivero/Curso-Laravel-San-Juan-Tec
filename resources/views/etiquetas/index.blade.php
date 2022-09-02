@include('layout.header')

<main class="container">

    <h1>Etiquetas</h1>
    <article>
        <p>Crear una nueva etiqueta</p>
        <button class="btn btn-primary" onclick="location.href='{{ route('etiquetas.create') }}'">
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
                @foreach ($etiquetas as $etiqueta)
                <tr>
                    <td>
                        {{ $etiqueta->id }}
                    </td>
                    <td>
                        {{ $etiqueta->nombre }}
                    </td>
                    <td>
                        <a href="{{ route('etiquetas.show', $etiqueta) }}">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('etiquetas.edit', $etiqueta) }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('etiquetas.destroy', $etiqueta) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar la categoría {{ $etiqueta->nombre }}?')">
                                Eliminar
                            </button>
                            <button class="contrast" type="submit" data-target="modal-example"
                                onClick="toggleModal(event)">
                                Eliminar
                            </button>
                            <!-- Modal -->
                            <dialog id="modal-example">
                                <article>
                                    <a href="#close" aria-label="Close" class="close" data-target="modal-example"
                                        onClick="toggleModal(event)">
                                    </a>
                                    <h3>Confirmar eliminación</h3>
                                    <p>
                                        ¿Estás seguro de eliminar la categoría {{ $etiqueta->nombre }}?
                                    </p>
                                    <footer>
                                        <a href="#cancel" role="button" class="secondary" data-target="modal-example"
                                            onClick="toggleModal(event)">
                                            Cancelar
                                        </a>
                                        <a href="#confirm" role="button" type="submit" data-target="modal-example"
                                            onClick="toggleModal('{{ $etiqueta->nombre }}?')">
                                            Confirmar
                                        </a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="toggleModal('{{ $etiqueta->nombre }}?')">
                                            Eliminar
                                        </button>
                                    </footer>
                                </article>
                            </dialog>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</main>

@include('layout.footer')