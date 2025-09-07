<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'transversal') }}</title>
        <!-- Scripts -->
        <!-- Framework  Gob styles-->
        <link rel="stylesheet" href="https://framework-gb.cdn.gob.mx/gm/accesibilidad/css/gobmx-accesibilidad.min.css">
        <link href="https://framework-gb.cdn.gob.mx/gm/v3/assets/styles/main.css" rel="stylesheet">
        
        {{-- Estilos personalizados --}}
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

    </head>

    <body class="bglight d-flex flex-column min-vh-100">
        <main class="page container flex-fill">
        {{-- Sub navigation bar --}}

                {{ $slot }}
    
        </main>

        <script src="https://framework-gb.cdn.gob.mx/gm/accesibilidad/js/gobmx-accesibilidad.min.js" ></script>
        <script src="https://framework-gb.cdn.gob.mx/gm/v3/assets/js/gobmx.js" ></script>


    </body>
</html>
