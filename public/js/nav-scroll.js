let lastScrollTop = 0;
const navbar = document.querySelector('.main-nav');
const topBar = document.querySelector('.top-bar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Obtenemos la altura de la marquesina blanca
    let topBarHeight = topBar.offsetHeight;

    // 1. Convertir en FIXED solo cuando el scroll pasa la marquesina
    if (scrollTop > topBarHeight) {
        navbar.classList.add('nav-fixed');

        // 2. Manejo de OCULTAR/MOSTRAR (solo cuando ya es fijo al tope)
        if (scrollTop > lastScrollTop && scrollTop > topBarHeight + 100) {
            // Bajando scroll: ocultar nav
            navbar.classList.add('nav-hidden');
        } else {
            // Subiendo scroll: mostrar nav
            navbar.classList.remove('nav-hidden');
        }
    } else {
        // Al regresar al tope de la página, el nav vuelve a su posición original
        navbar.classList.remove('nav-fixed');
        navbar.classList.remove('nav-hidden');
    }

    lastScrollTop = Math.max(0, scrollTop);
}, { passive: true });
