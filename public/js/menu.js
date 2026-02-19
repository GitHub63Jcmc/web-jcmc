const hamburger = document.querySelector('.hamburger');
// Usamos .header .menu para que solo afecte al de arriba
const menu = document.querySelector('.header .menu'); 
const closeMenu = document.querySelector('.close-menu');

if (hamburger && menu) {
    // Abrir / Alternar
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('show');
        const isExpanded = menu.classList.contains('show');
        hamburger.setAttribute('aria-expanded', isExpanded);
    });

    // Cerrar con la "X" (AÑADIDO)
    if (closeMenu) {
        closeMenu.addEventListener('click', () => {
            menu.classList.remove('show');
            hamburger.setAttribute('aria-expanded', 'false');
        });
    }

    // Cerrar al hacer clic fuera
    document.addEventListener('click', (event) => {
        if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
            menu.classList.remove('show');
            hamburger.setAttribute('aria-expanded', 'false');
        }
    });
}
