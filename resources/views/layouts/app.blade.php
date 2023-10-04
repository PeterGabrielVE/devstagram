<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <a href="/"></a>
        <a href="/nosotros">Nosotros</a>
        <a href="/tienda">Tienda</a>
    </nav>

    <h1 class="text-4xl">@yield('titulo')</h1>
    <hr>
    @yield('contenido')
</body>
</html>
