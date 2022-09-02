<!-- Footer -->
<footer class="container">
    <small> Federico Rivero • 2022 </small>
</footer>

{{--* PARA probar el boton modal --}}

{{-- <button data-url="{{ route('categorias.destroy', $categoria) }}" type="button"
    class="btn btn-danger btn-sm btnEliminarCategoria">
    <span class="fa fa-trash">
</button>
el atributo data-url
depsues en java con jquery
$(document).on('click','.btnEliminarCategoria', function (e){
var data_url = $(this).attr('data-url');
$('#frmEliminar').attr('action', data_url);
$('#eliminarCategoria').modal('show');

}); --}}


<script>
    const toggle = document.querySelector('.toggle');
    const toggleLabel = document.querySelector('.toggle-label');
    const toggleInner = document.querySelector('.toggle-inner');
    const toggleSwitch = document.querySelector('.toggle-switch');
    const theme = document.querySelector('html');

        toggle.addEventListener('change', () => {
            if (toggle.checked) {
                theme.setAttribute('data-theme', 'dark');
                toggleLabel.textContent = toggleSwitch.textContent;
            } else {
                theme.setAttribute('data-theme', 'light');
                toggleLabel.textContent = toggleInner.textContent;
            }
        });
        
        
        /*
        * Modal
        *
        * Pico.css - https://picocss.com
        * Copyright 2019-2022 - Licensed under MIT
        */

        // Config
        const isOpenClass = 'modal-is-open';
        const openingClass = 'modal-is-opening';
        const closingClass = 'modal-is-closing';
        const animationDuration = 400; // ms
        let visibleModal = null;


        // Toggle modal
        const toggleModal = event => {
        event.preventDefault();
        const modal = document.getElementById(event.currentTarget.getAttribute('data-target'));
        (typeof(modal) != 'undefined' && modal != null)
            && isModalOpen(modal) ? closeModal(modal) : openModal(modal)
        }

        // Is modal open
        const isModalOpen = modal => {
        return modal.hasAttribute('open') && modal.getAttribute('open') != 'false' ? true : false;
        }

        // Open modal
        const openModal = modal => {
        if (isScrollbarVisible()) {
            document.documentElement.style.setProperty('--scrollbar-width', `${getScrollbarWidth()}px`);
        }
        document.documentElement.classList.add(isOpenClass, openingClass);
        setTimeout(() => {
            visibleModal = modal;
            document.documentElement.classList.remove(openingClass);
        }, animationDuration);
        modal.setAttribute('open', true);
        }

        // Close modal
        const closeModal = modal => {
        visibleModal = null;
        document.documentElement.classList.add(closingClass);
        setTimeout(() => {
            document.documentElement.classList.remove(closingClass, isOpenClass);
            document.documentElement.style.removeProperty('--scrollbar-width');
            modal.removeAttribute('open');
        }, animationDuration);
        }

        // Close with a click outside
        document.addEventListener('click', event => {
        if (visibleModal != null) {
            const modalContent = visibleModal.querySelector('article');
            const isClickInside = modalContent.contains(event.target);
            !isClickInside && closeModal(visibleModal);
        }
        });

        // Close with Esc key
        document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && visibleModal != null) {
            closeModal(visibleModal);
        }
        });

        // Get scrollbar width
        const getScrollbarWidth = () => {

        // Creating invisible container
        const outer = document.createElement('div');
        outer.style.visibility = 'hidden';
        outer.style.overflow = 'scroll'; // forcing scrollbar to appear
        outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
        document.body.appendChild(outer);

        // Creating inner element and placing it in the container
        const inner = document.createElement('div');
        outer.appendChild(inner);

        // Calculating difference between container's full width and the child width
        const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

        // Removing temporary elements from the DOM
        outer.parentNode.removeChild(outer);

        return scrollbarWidth;
        }

        // Is scrollbar visible
        const isScrollbarVisible = () => {
        return document.body.scrollHeight > screen.height;
        }

</script>