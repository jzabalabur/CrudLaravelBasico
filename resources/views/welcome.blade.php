<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1>BOTONES:</h1>
        <button><a href="{{route('vehiculo.index')}}">Vehiculos</a></button>
        <button><a href="{{route('marca.index')}}">Marcas</a></button>

    </body>
</html>
