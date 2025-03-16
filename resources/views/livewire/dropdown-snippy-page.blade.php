<div class="w-52 top-0 right-0 mr-64">
    <div class="flex">
        <img src="{{ asset('SvgComponents/dropdown-arrow-svgrepo-com.svg') }}" alt="FlechaDropdown"
            class="size-20 cursor-pointer transition-transform duration-500
        @if ($isOpen) rotate-180
        @else
            rotate-0 @endif"
            wire:click="toggleDropdown">
        <h2 class="flex items-center justify-center text-center font-bold">Opciones</h2>
    </div>
    @if ($isOpen)
        <div class="bg-red-50 text-left p-3 transform transition-transform duration-500 origin-top scale-y-100 rounded-lg"
            style="transform-origin: top; transform: scaleY(1);">
            <ul class="space-y-3 text-center">
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold "><a
                        href="">Pomodoro</a></li>
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold">Hola</li>
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold">Hola</li>
            </ul>
        </div>
    @else
        <div class="bg-red-50 text-left p-3 transform transition-transform duration-500 origin-top scale-y-0 rounded-md"
            style="transform-origin: top; transform: scaleY(0);">
            <ul class="space-y-3 text-center">
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold "><a
                        href="">Pomodoro</a></li>
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold">Hola</li>
                <li class="text-4xl hover:scale-105 transition-transform duration-500 text-center font-bold">Hola</li>
            </ul>
        </div>
    @endif
</div>
