// Usamos DOMContentLoaded para asegurar que el HTML ya existe antes de buscar los botones
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.header .hamburger');
    const menu = document.querySelector('.header .menu'); 
    const closeMenu = document.querySelector('.close-menu');

    console.log("Botón hamburguesa:", hamburger); // Esto te dirá en la consola (F12) si lo encuentra
    console.log("Menú:", menu);

    if (hamburger && menu) {
        // Abrir / Alternar
        hamburger.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            menu.classList.toggle('show');
            console.log("Clase 'show' activa:", menu.classList.contains('show'));
        });

        // Cerrar con la "X" (Solo si existe)
        if (closeMenu) {
            closeMenu.addEventListener('click', () => {
                menu.classList.remove('show');
            });
        }

        // Cerrar al hacer clic fuera
        document.addEventListener('click', (event) => {
            if (menu.classList.contains('show')) {
                if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
                    menu.classList.remove('show');
                }
            }
        });
    } else {
        console.error("No se encontró el menú o la hamburguesa en el DOM");
    }
});
