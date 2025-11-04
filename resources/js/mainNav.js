function toggleMenu(e) {
    const menu = document.getElementById('menu');
    const barsIcon = document.getElementById('barsIcon');
    const xmarkMenu = document.getElementById('xmarkMenu');
    const menuBtn = document.getElementById('menuBtn');

    const isClosed = menu.classList.contains('opacity-0');

    if (e && (barsIcon.contains(e.target) || xmarkMenu.contains(e.target) || menuBtn.contains(e.target))) {
        if (isClosed) {
            menu.classList.remove('opacity-0', 'scale-0', 'pointer-events-none');
            menu.classList.add('opacity-100', 'scale-100');
        } else {
            menu.classList.remove('opacity-100', 'scale-100');
            menu.classList.add('opacity-0', 'scale-0', 'pointer-events-none');
        }
        barsIcon.classList.toggle('!hidden');
        xmarkMenu.classList.toggle('!hidden');
        return;
    }

    if (!isClosed && !menu.contains(e.target)) {
        menu.classList.remove('opacity-100', 'scale-100');
        menu.classList.add('opacity-0', 'scale-0', 'pointer-events-none');
        barsIcon.classList.remove('!hidden');
        xmarkMenu.classList.add('!hidden');
    }
}

document.addEventListener('click', toggleMenu);
window.showMenu = toggleMenu;