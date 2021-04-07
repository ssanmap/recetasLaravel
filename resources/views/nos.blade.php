<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>hola blade nosotros</h1>

    @php

        $nombre = 'seba';
        $edad = 22;
    @endphp

    @if($nombre == 'seba')
        {{'hola soy ' . $nombre}}
    @endif

    @if($edad == 22)

        {{'hola tengo ' .$edad}}
    @endif

    {{$nombre}}

    <script src="{{ asset('../js/app.js') }}"></script>
</body>
</html>
