@include('layout.header')

<div>
    <h5>Perfil</h5>
    <p>{{ $perfil->nombre }}</p>
    {{-- <p>{{ $perfil->apellido }}</p> --}}
</div>

@include('layout.footer')