<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/closeMenu.js', 'resources/js/swipper_about_me.js'])
    @endif
    @livewireStyles
    @livewireScripts
    <title>Snippy</title>
</head>

<body class="bg-color-snippy">
    @livewire('menu-header')
    <div class="flex overflow-x-hidden mb-20">
        @livewire('menu-desplegable-principal')
        <div class="ml-4">
            <img src="{{ asset('Cube/CubeWhite.gif') }}">
        </div>
        @livewire('menu-desplegable-opciones')
    </div>
    <div class="ml-96 mr-96">
        <h1 class="text-4xl text-center font-inconsolata typewriter ">IsThisReal? is creating</h1>
    </div>


    <div class="mt-96 mb-2 bg-black pt-20 pb-20 text-white" data-aos="fade-right">
        <div class="ml-12">
            <h1 class="text-9xl font-semibold" data-aos="fade-right">Desarrollador Web.</h1>
            <h2 class="ml-24 text-6xl font-semibold" data-aos="fade-left">Tecnico en Sistemas Microinformaticos y Redes
            </h2>
        </div>
    </div>
    <div class="mt-32 ml-36 mr-52" id="about-me">
        <div class="flex items-center ">
            <div>
                <h1 class="text-6xl font-extrabold mb-20" data-aos="fade-right">About me</h1>
                <div class="flex space-x-2">
                    <div class=" flex-col ml-12 w-1/3 border-2 hover:border-black transition-colors rounded-xl p-10 relative justify-center items-center"
                        data-aos="zoom-in">
                        <div class="mt-2 ml-2 mb-3 hover:scale-105 transition duration-500">
                            <div class="relative w-64 h-64 mx-auto overflow-hidden rounded-full shadow-2xl border-4 border-gray-800 hover:scale-1 transition-transform duration-500"
                                data-aos="zoom-in">
                                <img src="{{ asset('SnippyPhoto/snippy.jpeg') }}" alt="Snippy"
                                    class=" transform -translate-y-28">
                            </div>
                            <h1 class="text-4xl font-inconsolata font-bold text-center mt-5">Miguel Angel<br>
                                <span class="italic font-thin text-xl">IsThisReal?</span>
                            </h1>
                        </div>
                    </div>
                    <div class="w-2/3 border-2 border-gray-300 rounded-lg p-10">
                        <p class="text-xl" data-aos="zoom-in">
                            Soy una persona <strong>tranquila</strong> y <strong>meticulosa</strong>, a la que le
                            encanta
                            experimentar y descubrir formas más
                            <strong>eficientes</strong> de hacer las cosas.
                            Creo firmemente que la clave para afrontar cualquier proyecto con éxito es mantener un
                            <strong>entorno de trabajo limpio y simple</strong>,
                            y una <strong>mente serena y abierta</strong>.
                            Esto me permite <em>identificar con claridad</em> los posibles errores y encontrar las
                            <strong>mejores soluciones</strong>.
                        </p>
                        <br>
                        <p class="text-xl mt-4" data-aos="zoom-in">
                            Para mí, siempre hay espacio para la <strong>mejora y el aprendizaje</strong>.
                            Pienso que las <strong>mejores ideas</strong> surgen cuando te atreves a salir de lo
                            conocido y
                            pruebas <em>nuevas perspectivas</em>.
                            Si algo me define, es mi <strong>compromiso</strong> por ofrecer <strong>soluciones
                                prácticas y
                                bien
                                pensadas</strong>,
                            siempre con la intención de <strong>ir un paso más allá</strong>.
                        </p>
                    </div>

                    <img src="{{ asset('SvgComponents/flechadiagonal.svg') }}" alt=""
                        class="size-32 bottom-0 hover:scale-105 transition-transform duration-500 cursor-pointer mt-96">
                </div>
            </div>
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

    <div class="mt-28 ml-36 mr-52">
        <h1 class="text-6xl font-extrabold mb-20" id="tech" data-aos="fade-right">Tech</h1>
        <div class="flex space-x-5 border-dashed border-b-2 border-black pb-10">
            <div class="flex-col space-y-5 w-2/3">
                <div class="border-2 border-black rounded-xl p-5">
                    <p class="text-xl font-funnel">Estas son las tecnologías con las que he trabajado. Destaco el
                        desarrollo
                        con <strong class="text-blue-500">PHP</strong> y el framework <strong
                            class="text-red-500">Laravel</strong> donde he
                        desarrollado gran
                        parte de mis aplicaciones.
                        En Laravel, tengo un dominio completo sobre el <strong>enrutamiento</strong>, la creación de
                        <strong>APIs RESTful</strong>,
                        la integración de bases de datos utilizando <strong>Eloquent ORM</strong>, y la implementación
                        de <strong>autenticación
                            y autorización</strong>. Además, he trabajado con <strong>migraciones y seeders</strong>
                        para la gestión de bases de
                        datos,
                        y he utilizado <strong>Blade</strong> para la creación de vistas dinámicas y reutilizables.
                        También he
                        implementado
                        <strong>pruebas unitarias y funcionales</strong> para asegurar la calidad del código.
                    </p>
                </div>
                <div class="border-2 border-black rounded-xl p-5">
                    <p class="text-xl font-funnel">Dedico parte de mi tiempo libre al estudio de <strong>nuevas
                            tecnologías</strong> de
                        forma
                        autodidacta, explorando herramientas como <strong>Blender</strong>, <strong>Vue</strong> y
                        <strong>Next.js</strong>, entre otros... Actualmente, mi enfoque
                        principal está en <strong class="text-orange-500">Blender</strong>, ya que me apasiona la
                        creación de <strong>modelos
                            3D</strong> y la animación. Me he
                        familiarizado con su interfaz, el modelado y la creación de materiales. También he explorado
                        <strong>Vue</strong>
                        y <strong>Next.js</strong> por curiosidad, ampliando mis conocimientos en distintos entornos de
                        desarrollo.
                        Mantenerme en constante aprendizaje es una prioridad para mí, ya que disfruto explorando nuevas
                        herramientas y expandiendo mis habilidades en distintas áreas tecnológicas.
                    </p>
                </div>
            </div>
            <div class="w-1/3 rounded-xl border-2 border-black p-5">
                <h1 class="text-4xl text-center font-bytesized border-b-2 border-gray-200">TECNOLOGIAS</h1>
                <ul class="text-3xl p-4 font-pressstart mt-3 text-center">
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">
                        JavaScript
                    </li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">PHP</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">HTML</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">CSS</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Tailwind</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Laravel</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Python</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">MySQL</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">PostgreSQL</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Git</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">GitHub</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Linux</li>
                    <li class="hover:text-gray-400 transition-colors duration-300 cursor-default">Blender</li>
                </ul>
            </div>
        </div>
        <div class="block justify-center items-center mt-10">
            <div class="flex justify-center items-center space-x-10 mt-10">
                <img src="{{ asset('TechSvgs/bash.svg') }}" alt="bash"
                    class="size-32 hover:animate-bounce transition-all" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('TechSvgs/html5.svg') }}" alt="html" class="size-32" data-aos="zoom-in"
                    data-aos-delay="200">
                <img src="{{ asset('TechSvgs/css3.svg') }}" alt="css" class="size-32" data-aos="zoom-in"
                    data-aos-delay="300">
                <img src="{{ asset('TechSvgs/javascript.svg') }}" alt="javascript" class="size-32"
                    data-aos="zoom-in" data-aos-delay="400">
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
                <img src="{{ asset('TechSvgs/blender.svg') }}" alt="blender" class="size-32" data-aos="zoom-in"
                    data-aos-delay="1100">
                <img src="{{ asset('TechSvgs/git.svg') }}" alt="git" class="size-32" data-aos="zoom-in"
                    data-aos-delay="1200">
                <img src="{{ asset('TechSvgs/github.svg') }}" alt="github" class="size-32" data-aos="zoom-in"
                    data-aos-delay="1300">
            </div>
        </div>

    </div>

    <div class="mt-28 ml-36 mr-52 mb-20" data-aos="zoom-in" id="blender">
        <h1 class="text-6xl font-extrabold mb-20">Blender Stuff</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/TazaRenderizada.png') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Taza_Navideña</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata">Taza de navidad donde se intenta jugar con la iluminación y
                            fluidos</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full h-full rounded-xl overflow-hidden">
                    <video src="{{ asset('Blender/cascos.mp4') }}" alt="prueba" class="w-full h-full object-cover"
                        autoplay loop muted></video>
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44">
                        <span class="ml-2">Cascos_v1.0</span>
                    </h2>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/hamburguesa.jpeg') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Hamburguesa</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata">Hamburguer</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full h-full rounded-xl overflow-hidden">
                    <video src="{{ asset('Blender/Donut.mp4') }}" alt="prueba" class="w-full h-full object-cover"
                        autoplay loop muted></video>
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44">
                        <span class="ml-2">Donut</span>
                    </h2>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/abstracto.png') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Abstract0</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata"> ?¿?!!!!ABsTraC000000</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/prueba.avif') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Blender_01</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus
                            ab velit voluptas laboriosam aliquam numquam nobis</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/prueba.avif') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Blender_01</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus
                            ab velit voluptas laboriosam aliquam numquam nobis</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-96 bg-gray-200 rounded-xl shadow-sm mb-10 cursor-pointer hover:shadow-lg hover:scale-105 transition duration-500">
                <div class="flex justify-center items-center w-full rounded-xl">
                    <img src="{{ asset('Blender/prueba.avif') }}" alt="prueba" class="p-0 w-full h-44">
                </div>
                <div class="mt-4 mb-4">
                    <h2 class="text-2xl font-bytesized mb-4 bg-color-snippy mr-44"><span
                            class="ml-2">Blender_01</span>
                    </h2>
                    <div class="ml-4 mr-4">
                        <p class="text-lg font-inconsolata">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus
                            ab velit voluptas laboriosam aliquam numquam nobis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
