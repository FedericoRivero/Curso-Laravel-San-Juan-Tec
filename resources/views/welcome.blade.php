@include('layout.header')
<!-- Header -->
<header class="container">
    <hgroup>

        <div class="row grid">
            <div class="col-6">
                <img src="{{ asset('assets/dolar.svg') }}" alt="Logo" class="img-fluid">
            </div>
            <div class="col-6 text-center">

                <h6>Aplicación para la gestión de gastos e ingresos</h6>

                <article>
                    <p>Esta aplicación permite gestionar los gastos e ingresos, para que puedas tener
                        un control de sus finanzas personales.
                    </p>

                    <p>La aplicación permite crear perfiles de usuario, para que cada persona pueda tener suspropios
                        datos.
                    </p>
                    <!-- Button to trigger the modal -->
                    <a data-target="modal-example" onClick="toggleModal(event)" href="#">
                        <code>+ Info</code>
                    </a>
                </article>

            </div>
        </div>

    </hgroup>
</header>

<!-- Main -->
<main class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, totam. Perspiciatis perferendis quis officia
        quod, voluptas, quibusdam, voluptates quia voluptatibus. Quisquam, quae. Quisquam, quae. Quisquam.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, totam. Perspiciatis perferendis quis
        officia.
    </p>

    <p>Todas los opciones</p>
    <ul>
        <article>
            <li>Crea un nuevo <code>Gasto</code></li>
            <a href="{{ route('gastos.create') }}" class="btn btn-primary">Nuevo gasto</a>
        </article>

        <article>
            <li>Crea un nuevo <code>Ingreso</code></li>
            <a href="{{ route('ingresos.create') }}" class="btn btn-primary">Nuevo ingreso</a>
        </article>

        <article>
            <li>Crea un nuevo <code>Perfil</code></li>
            <a href="{{ route('perfiles.create') }}" class="btn btn-primary">Nuevo perfil</a>
        </article>

        <article>
            <li>Crea una nueva <code>Categoría</code></li>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva categoría</a>
        </article>
    </ul>
</main>


<!-- Modal -->
<dialog id="modal-example">
    <article>
        <a href="#close" aria-label="Close" class="close" data-target="modal-example" onClick="toggleModal(event)">
        </a>
        <h3>Aplicación para la gestión de gastos e ingresos</h3>
        <p>Esta aplicación permite gestionar los gastos e ingresos, para que puedas tener
            un control de sus finanzas personales.
        </p>
        <p>La aplicación permite crear perfiles de usuario, para que cada persona pueda tener suspropios
            datos.
        </p>
        <footer>
            <a href="#cancel" role="button" class="secondary" data-target="modal-example" onClick="toggleModal(event)">
                Cerrar
            </a>
            {{-- <a href="#confirm" role="button" data-target="modal-example" onClick="toggleModal(event)">
                Confirm
            </a> --}}
        </footer>
    </article>
</dialog>
@include('layout.footer')