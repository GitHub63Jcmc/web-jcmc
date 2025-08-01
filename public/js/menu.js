const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');
const closeMenu = document.querySelector('.close-menu');

if (hamburger && menu) {
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('show');
        const isExpanded = menu.classList.contains('show');
        hamburger.setAttribute('aria-expanded', isExpanded);
    });

    // Cerrar el menú al hacer clic fuera de él o en el botón de cierre
    document.addEventListener('click', (event) => {
        if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
            menu.classList.remove('show');
        }
    });
}
