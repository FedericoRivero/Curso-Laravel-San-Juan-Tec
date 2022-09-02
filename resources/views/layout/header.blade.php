<!DOCTYPE html>
<html lang="es" data-theme="toggle">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta description="Sistema de autogestión de finanzas personales">
    <meta name="author" content="Federico Rivero">
    {{--** favicon **--}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}
    <link rel=" manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/mstile-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">

    <title>Curso Laravel - San Juan Tec 2022 · Autogestión</title>

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 0;
            box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.1);
        }

        .position {
            position: relative;
            margin-top: 20px;
        }

        .center {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    <article class="navbar">
        <nav class="container">
            <ul>
                <h2 class="position">Autogestión</h2>
            </ul>
            <ul>
                <li>
                    <a href="#" class="secondary">
                        <input type="checkbox" id="toggle" class="toggle" role="switch" checked="checked">
                        <label for="toggle" class="toggle-label">
                            <span class="toggle-switch" id="toggle-switch">🌑</span>
                            <span class="toggle-inner" id="toggle-inner">🌕</span>
                        </label>
                    </a>
                </li>
                {{-- <li><a href="#">Link</a></li> --}}
                {{-- <li><a href="#">Link</a></li> --}}
                <li role="list" dir="rtl">
                    <a href="#" aria-haspopup="true" aria-expanded="false" data-target="modal-1" class="secondary">
                        <strong>Menu</strong>
                        <ul role="listbox" aria-label="Menu">
                            {{-- <li><a>Action</a></li> --}}
                            {{-- <li><a>Another action</a></li> --}}
                            {{-- <li><a>Something else here</a></li> --}}

                            <li><a href="{{ route('gastos.index') }}">Gastos</a></li>
                            <li><a href="{{ route('ingresos.index') }}">Ingresos</a></li>
                            <li><a href="{{ route('perfiles.index') }}">Perfiles</a></li>
                            <li><a href="{{ route('categorias.index') }}">Categorías</a></li>
                            <li><a href="{{ route('pagos.index') }}">Pagos</a></li>
                            <li><a href="{{ route('etiquetas.index') }}">Etiquetas</a></li>
                            <li><a href="{{ route('items.index') }}">Items</a></li>
                        </ul>
                </li>
            </ul>
        </nav>
    </article>

    <code class="center">Curso Laravel - San Juan Tec 2022</code>

</body>

</html>