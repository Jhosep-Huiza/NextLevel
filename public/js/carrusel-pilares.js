document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carruselTrack');

    let index = 0;
    const totalCards = 8;

    const getCardsPerView = () => {
        if (window.innerWidth > 1200) return 4;
        if (window.innerWidth > 650) return 2;
        return 1;
    };

    const moveCarrusel = () => {
        const cardsPerView = getCardsPerView();
        const maxIndex = totalCards - cardsPerView;

        if (index > maxIndex) {
            index = 0;
        }

        const percentage = -(index * (100 / totalCards));
        track.style.transform = `translateX(${percentage}%)`;
    };

    let autoPlay = setInterval(() => {
        index++;
        moveCarrusel();
    }, 4000);

    const container = document.querySelector('.info-organic-section');
    container.addEventListener('mouseenter', () => clearInterval(autoPlay));

    container.addEventListener('mouseleave', () => {
        autoPlay = setInterval(() => {
            index++;
            moveCarrusel();
        }, 4000);
    });

    window.addEventListener('resize', () => {
        index = 0;
        moveCarrusel();
    });
});
