document.addEventListener('click', function(event) {
    var menuHeader = document.getElementById('menu-header');
    if (!menuHeader.contains(event.target)) {
        @this.call('toggleMenu');
    }
});