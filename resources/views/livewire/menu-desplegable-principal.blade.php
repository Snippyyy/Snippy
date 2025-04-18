<div class="flex">
    <div class="flex justify-center items-center bg-gradient-to-tl from-black to-gray-800 h-128 w-112 rounded-sm @if (!$isOpen) -translate-x-80 @endif
 transition-all duration-500"
        wire:mouseenter="toggleMenu" wire:mouseleave="toggleMenu">
        <div class="space-y-1 p-10 text-center text-white">
            <h1 class="text-6xl font-bold mb-6">Snippy</h1>
            <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#about-me">About me</a></h2>
            <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#my-projects">My projects</a></h2>
            <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#tech">Tech</a></h2>
            <h2 class="text-4xl font-bold hover:scale-105 transition"><a href="#blender">Blender Stuff</a></h2>
        </div>
        <img src="{{ asset('SvgComponents/rightArrow.svg') }}" alt=""
            class="size-20 mr-4 cursor-pointer transition-transform duration-500 @if ($isOpen) rotate-180 @endif">
    </div>
</div>
