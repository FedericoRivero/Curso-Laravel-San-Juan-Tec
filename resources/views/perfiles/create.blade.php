@include('layout.header')

<form action="{{ route('perfiles.store') }}" method="post" class="container">

    <h1>Crear Perfil</h1>
    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required="" autofocus
        autocomplete="off" id="nombre" aria-invalid="">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" required=""
        autocomplete="off" id="apellido" aria-invalid="">

    <input type="submit" value="Guardar">

</form>

<script>
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');


    nombre.addEventListener('input', function () {
        if (nombre.value.length > 0) {
            nombre.setAttribute('aria-invalid', 'false');
        } else {
            nombre.setAttribute('aria-invalid', 'true');
        }
    } );

    apellido.addEventListener('input', function () {
        if (apellido.value.length > 0) {
            apellido.setAttribute('aria-invalid', 'false');
        } else {
            apellido.setAttribute('aria-invalid', 'true');
        }
    });

    nombre.addEventListener('keyup', () => {
        if (!/^[a-zA-Z]+$/.test(nombre.value)) {
            // el input no acepta letras ni espacios
            nombre.value = nombre.value.slice(0, -1);
        }else{
            // convierte solo la primera letra a mayuscula
            nombre.value = nombre.value.charAt(0).toUpperCase() + nombre.value.slice(1).toLowerCase();
        }
    });
        
    apellido.addEventListener('keyup', () => { 
        if (!/^[a-zA-Z]+$/.test(apellido.value)) {
            // el input no acepta letras ni espacios
            apellido.value = apellido.value.slice(0, -1);
        }else{
            // convierte solo la primera letra a mayuscula
            apellido.value = apellido.value.charAt(0).toUpperCase() + apellido.value.slice(1).toLowerCase();
        }
    });
    
</script>

@include('layout.footer')