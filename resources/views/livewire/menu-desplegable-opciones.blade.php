<div class="flex justify-center items-center bg-gradient-to-tr from-black to-gray-800 h-128 w-112 rounded-sm ml-9 @if (!$isOpen) translate-x-80 @endif
 transition-all duration-500"
    wire:mouseenter="toggleMenu" wire:mouseleave="toggleMenu">
    <img src="{{ asset('SvgComponents/leftArrow.svg') }}" alt="arrow"
        class="size-20 cursor-pointer transition-transform duration-500 ml-8 @if ($isOpen) rotate-180 @endif">
    <div class="space-y-1 p-10 text-center text-white">
        <h1 class="text-6xl font-bold mb-6">Servicios</h1>
        <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#about-me">Pomodoro</a></h2>
        <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#my-projects">opcion1</a></h2>
        <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#tech">opcion2</a></h2>
        <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#blender">opcion3</a></h2>
    </div>
</div>
