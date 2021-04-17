<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Example livewire</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Agrega los estilos de livewire -->
        @livewireStyles
    </head>
    <body class="antialiased">
        @yield('content')

        @livewireScripts
    </body>
</html>
