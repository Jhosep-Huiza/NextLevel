document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('docentesTrack');
    const next = document.getElementById('docNextBtn');
    const prev = document.getElementById('docPrevBtn');

    let index = 0;
    let autoPlayInterval;

    const getVisibleCards = () => {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 900) return 2;
        if (window.innerWidth <= 1200) return 3;
        return 4;
    };

    const moveNext = () => {
        const visibleCards = getVisibleCards();
        const totalCards = track.querySelectorAll('.docente-card-modern').length;

        if (index < totalCards - visibleCards) {
            index++;
        } else {
            index = 0;
        }
        updateTrack();
    };

    const movePrev = () => {
        const visibleCards = getVisibleCards();
        const totalCards = track.querySelectorAll('.docente-card-modern').length;

        if (index > 0) {
            index--;
        } else {
            index = totalCards - visibleCards;
        }
        updateTrack();
    };

    next.addEventListener('click', () => {
        moveNext();
        resetAutoPlay();
    });

    prev.addEventListener('click', () => {
        movePrev();
        resetAutoPlay();
    });

    function updateTrack() {
        const card = track.querySelector('.docente-card-modern');
        if (!card) return;

        const gap = 25;
        const cardWidth = card.offsetWidth;
        track.style.transform = `translateX(-${index * (cardWidth + gap)}px)`;
    }

    const startAutoPlay = () => {
        autoPlayInterval = setInterval(moveNext, 4000);
    };

    const stopAutoPlay = () => {
        clearInterval(autoPlayInterval);
    };

    const resetAutoPlay = () => {
        stopAutoPlay();
        startAutoPlay();
    };

    startAutoPlay();

    track.parentElement.addEventListener('mouseenter', stopAutoPlay);
    track.parentElement.addEventListener('mouseleave', startAutoPlay);

    window.addEventListener('resize', () => {
        index = 0;
        updateTrack();
    });
});
