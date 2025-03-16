<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @livewireStyles
    @livewireScripts
    <title>Snippy</title>
</head>

<body class="bg-color-snippy">
    <div class="flex lg:flex-row justify-center items-center mt-10 space-x-20">
        <div class="space-y-1 p-1 text-center">
            <h1 class="text-4xl font-bold mb-6">Snippy</h1>
            <h2 class="text-2xl font-bold hover:scale-105 transition"><a href="#about-me">About me</a></h2>
            <h2 class="text-2xl font-bold hover:scale-105 transition"><a href="#my-projects">My projects</a></h2>
            <h2 class="text-2xl font-bold hover:scale-105 transition"><a href="#tech">Tech</a></h2>
            <h2 class="text-2xl font-bold hover:scale-105 transition"><a href="#blender">Blender Stuff</a></h2>
        </div>
        <div>
            <img src="{{ asset('Cube/CubeWhite.gif') }}" alt="Cubo" class="size-96">
        </div>
        @livewire('dropdown-snippy-page')
    </div>


    <div class="mt-96 mb-2 bg-black pt-20 pb-20 text-white" data-aos="fade-right">
        <div class="ml-12">
            <h1 class="text-9xl font-semibold" data-aos="fade-right">Desarrollador Web.</h1>
            <h2 class="ml-24 text-6xl font-semibold" data-aos="fade-left">Tecnico en Sistemas Microinformaticos y Redes
            </h2>
        </div>
    </div>
    <div class="mt-32 ml-36 mr-52" id="about-me">
        <h1 class="text-6xl font-extrabold mb-20" data-aos="fade-right">About me</h1>
        <div class="flex ml-12 border-2 rounded-xl p-10 relative animate-border" data-aos="zoom-in">
            <div class="mt-2 ml-2 hover:scale-105 transition duration-500">
                <div class="relative w-64 h-64 mx-auto overflow-hidden rounded-full shadow-2xl border-4 border-gray-800 hover:scale-1 transition-transform duration-500"
                    data-aos="zoom-in">
                    <img src="{{ asset('SnippyPhoto/snippy.jpeg') }}" alt="Snippy" class=" transform -translate-y-28">
                </div>
            </div>
            <div class="flex flex-col ml-14 text-justify">
                <p class="text-xl" data-aos="zoom-in">
                    Soy una persona <strong>tranquila</strong> y <strong>meticulosa</strong>, a la que le encanta
                    experimentar y descubrir formas más
                    <strong>eficientes</strong> de hacer las cosas.
                    Creo firmemente que la clave para afrontar cualquier proyecto con éxito es mantener un
                    <strong>entorno de trabajo limpio y simple</strong>,
                    y una <strong>mente serena y abierta</strong>.
                    Esto me permite <em>identificar con claridad</em> los posibles errores y encontrar las
                    <strong>mejores soluciones</strong>.
                </p>
                <p class="text-xl mt-4" data-aos="zoom-in">
                    Para mí, siempre hay espacio para la <strong>mejora y el aprendizaje</strong>.
                    Pienso que las <strong>mejores ideas</strong> surgen cuando te atreves a salir de lo conocido y
                    pruebas <em>nuevas perspectivas</em>.
                    Si algo me define, es mi <strong>compromiso</strong> por ofrecer <strong>soluciones prácticas y bien
                        pensadas</strong>,
                    siempre con la intención de <strong>ir un paso más allá</strong>.
                </p>
            </div>
        </div>
        <div class="mt-14" data-aos="zoom-in">
            <h1 class="text-4xl text-center font-extrabold mb-4">Actualmente en:</h1>
            <img src="{{ asset('CurrentJob/nttdata.png') }}" alt="nttdata" class="mx-auto mt-5 w-48 h-auto">
            <h3 class="text-2xl text-center mt-4">13 de Marzo de 2025 - Presente</h3>
            <h4 class="text-xl text-center mt-2">Prácticas</h4>
        </div>
    </div>

    <div class="mt-28 ml-36 mr-52" id="my-projects">
        <h1 class="text-6xl font-extrabold mb-20" data-aos="fade-right">My projects</h1>
        <div class="grid grid-cols-2 justify-center gap-4 ml-12">
            <div class="bg-white p-10 rounded-xl shadow-lg cursor-pointer hover:shadow-2xl transition"
                data-aos="zoom-in">
                <h2 class="text-2xl font-bold text-center mb-4">Delta</h2>
                <img src="{{ asset('ProjectsFiles/DeltaExample.png') }}" alt="" class="rounded-md">
                <p class="text-xl text-center mt-5">¡Bienvenidos a Delta, tu mercado confiable para comprar y vender
                    artículos de segunda
                    mano! </p>
            </div>
        </div>
    </div>
    </div>

    <div class="mt-28 ml-36 mr-52 space">
        <h1 class="text-6xl font-extrabold mb-20" id="tech" data-aos="fade-right">Tech</h1>
        <p class="text-xl ml-12">Estas son las tecnologías con las que he trabajado. Destaco el desarrollo con PHP y el
            framework Laravel donde he desarrollado gran parte de mis aplicaciones,, así como el uso de Python para el
            análisis de datos masivos.</p>
        <div class="block justify-center items-center mt-10 ml-12">
            <div class="flex justify-center items-center space-x-10 mt-10">
                <img src="{{ asset('TechSvgs/bash.svg') }}" alt="bash" class="size-32" data-aos="zoom-in"
                    data-aos-delay="100">
                <img src="{{ asset('TechSvgs/html5.svg') }}" alt="html" class="size-32" data-aos="zoom-in"
                    data-aos-delay="200">
                <img src="{{ asset('TechSvgs/css3.svg') }}" alt="css" class="size-32" data-aos="zoom-in"
                    data-aos-delay="300">
                <img src="{{ asset('TechSvgs/javascript.svg') }}" alt="javascript" class="size-32" data-aos="zoom-in"
                    data-aos-delay="400">
                <img src="{{ asset('TechSvgs/laravel.svg') }}" alt="laravel" class="size-32" data-aos="zoom-in"
                    data-aos-delay="500">
                <img src="{{ asset('TechSvgs/mysql.svg') }}" alt="mysql" class="size-32" data-aos="zoom-in"
                    data-aos-delay="600">
                <img src="{{ asset('TechSvgs/postgres.svg') }}" alt="mysql" class="size-32" data-aos="zoom-in"
                    data-aos-delay="600">
            </div>
            <div class="flex justify-center items-center space-x-10 mt-10">
                <img src="{{ asset('TechSvgs/tailwind.svg') }}" alt="tailwind" class="size-32" data-aos="zoom-in"
                    data-aos-delay="700">
                <img src="{{ asset('TechSvgs/php.svg') }}" alt="php" class="size-32" data-aos="zoom-in"
                    data-aos-delay="800">
                <img src="{{ asset('TechSvgs/azure.svg') }}" alt="azure" class="size-32" data-aos="zoom-in"
                    data-aos-delay="900">
                <img src="{{ asset('TechSvgs/python.svg') }}" alt="python" class="size-32" data-aos="zoom-in"
                    data-aos-delay="1000">
            </div>
        </div>

    </div>

    <div class="mt-10 ml-10 space" data-aos="zoom-in" id="blender">
        <h1 class="text-6xl font-extrabold mb-20">Blender Stuff</h1>
        <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab neque veniam, aliquam quas,
            iure
            eos blanditiis
            ea, eaque autem unde voluptate. Nihil molestiae, nam debitis quibusdam quae corporis facilis eaque! Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Reiciendis libero sed quis consectetur sequi commodi
            repellendus laborum amet rerum alias maiores, esse veniam ullam quia corrupti asperiores neque ab
            voluptatem.</p>
</body>

</html>
