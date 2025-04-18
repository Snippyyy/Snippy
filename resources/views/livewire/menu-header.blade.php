<div id="menu-header"
    class="flex-col items-center justify-center overflow-y-hidden ml-96 mr-96 mb-5 rounded-md -translate-y-2 overflow-x-hidden">
    <div
        class="bg-gradient-to-t from-black to-gray-800 h-36 p-5 z-50 @if ($isOpen) -translate-y-0 @else -translate-y-36 @endif transition-all duration-500 rounded-sm justify-center">
        <div class="justify-center items-center space-y-4">
            <h1 class="text-white text-4xl text-center font-bold font-funnel hover:underline"><a
                    href="{{ route('login') }}" class="hover:underline">Log in</a>
            </h1>
            <h1 class="text-white text-xl text-center font-bold font-funnel"><a href="{{ route('register') }}"
                    class="hover:underline">Solicitar
                    registro</a></h1>
        </div>
    </div>
    <div class="flex justify-center -mt-24 mr-5 display-none z-20">
        <img src="{{ asset('SvgComponents/downArrow-header.svg') }}" alt=""
            class="size-20 transition-all duration-500  @if ($isOpen) rotate-180 translate-x-96 opacity-0 scale-50 cursor-default @else cursor-pointer hover:scale-90 @endif"
            wire:click="toggleMenu">
    </div>
</div>
<script>
    document.addEventListener('click', function(event) {
        var menuHeader = document.getElementById('menu-header');
        if (!menuHeader.contains(event.target) && @this.get('isOpen')) {
            @this.call('toggleMenu');
        }
    });
</script>
