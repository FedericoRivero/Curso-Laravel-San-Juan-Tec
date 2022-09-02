<!-- Modal -->
<dialog id="modal-example">
    <article>
        <a href="#close" aria-label="Close" class="close" data-target="modal-example" onClick="toggleModal(event)">
        </a>
        <h3>Confirmar eliminación</h3>
        <p>
            ¿Estás seguro de eliminar la categoría {{ $etiqueta->nombre }}?
        </p>
        <footer>
            <a href="#cancel" role="button" class="secondary" data-target="modal-example" onClick="toggleModal(event)">
                Cancel
            </a>
            <a href="#confirm" role="button" data-target="modal-example" onClick="toggleModal(event)">
                Confirm
            </a>
        </footer>
    </article>
</dialog>