<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <title>Snippy</title>
</head>
<body>
    @auth
    <h1 class="text-center p-2 text-xl color-animation font-bold">Bienvenido Snippy.</h1>
    @else
    <h1 class="text-center p-2 animate-bounce"><a href="{{ route('login') }}">¿Eres Snippy? Logueate.</a></h1>
    @endauth
    <div class="m-20 flex justify-between">
        <div class="space-y-1">
            <h1 class="text-4xl font-bold mb-6">Snippy</h1>
            <h2 class="text-2xl font-bold"><a href="#">About me</a></h2>
            <h2 class="text-2xl font-bold"><a href="#">My projects</a></h2>
            <h2 class="text-2xl font-bold"><a href="#">Tech</a></h2>
        </div>
        <div class="bg-red-50 text-left p-3">
            <h2 class="text-2xl font-bold"> ^ Categories</h2>
            <ul>
                <li class="
                @auth
                 text-red-300 
                @endauth">No hay nada de momento...</li>
                <li>Hola</li>
                <li>Hola</li>
            </ul>
        </div>

    </div>
</body>
</html>