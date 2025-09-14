import './bootstrap';
import '@awesome.me/kit-5ca47ad83d/icons/css/all.css';

function showMenu() {
    const menu = document.getElementById('menu');
    const barsIcon = document.getElementById('barsIcon');
    const xmarkMenu = document.getElementById('xmarkMenu');

    const isClosed = menu.classList.contains('opacity-0');

    if (isClosed) {
        // pokaż menu płynnie
        menu.classList.remove('opacity-0', 'scale-0', 'pointer-events-none');
        menu.classList.add('opacity-100', 'scale-100');
    } else {
        // ukryj menu płynnie
        menu.classList.remove('opacity-100', 'scale-100');
        menu.classList.add('opacity-0', 'scale-0', 'pointer-events-none');
    }

    // zamiana ikon
    barsIcon.classList.toggle('!hidden');
    xmarkMenu.classList.toggle('!hidden');
}

window.showMenu = showMenu;
