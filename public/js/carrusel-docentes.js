document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('docentesTrack');
    const next = document.getElementById('docNextBtn');
    const prev = document.getElementById('docPrevBtn');
    const originalCards = Array.from(track.querySelectorAll('.docente-card-modern'));
    const totalOriginal = originalCards.length;

    originalCards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });

    let index = 0;
    let autoPlayInterval;
    let isTransitioning = false;

    const getVisibleCards = () => {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 900) return 2;
        if (window.innerWidth <= 1200) return 3;
        return 4;
    };

    const moveNext = () => {
        if (isTransitioning) return;
        index++;
        updateTrack(true);
    };

    const movePrev = () => {
        if (isTransitioning) return;

        if (index <= 0) {
            index = totalOriginal;
            updateTrack(false);
            setTimeout(() => {
                index--;
                updateTrack(true);
            }, 10);
        } else {
            index--;
            updateTrack(true);
        }
    };

    function updateTrack(animate = true) {
        const card = track.querySelector('.docente-card-modern');
        if (!card) return;

        const gap = 25;
        const cardWidth = card.offsetWidth;

        if (animate) {
            track.style.transition = "transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
            isTransitioning = true;
        } else {
            track.style.transition = "none";
        }

        track.style.transform = `translateX(-${index * (cardWidth + gap)}px)`;

        if (animate) {
            track.addEventListener('transitionend', function handler() {
                track.removeEventListener('transitionend', handler);
                isTransitioning = false;

                if (index >= totalOriginal) {
                    track.style.transition = "none";
                    index = 0;
                    track.style.transform = `translateX(0)`;
                }
            });
        }
    }

    next.addEventListener('click', () => {
        moveNext();
        resetAutoPlay();
    });

    prev.addEventListener('click', () => {
        movePrev();
        resetAutoPlay();
    });

    const startAutoPlay = () => {
        autoPlayInterval = setInterval(moveNext, 4000);
    };

    const stopAutoPlay = () => clearInterval(autoPlayInterval);

    const resetAutoPlay = () => {
        stopAutoPlay();
        startAutoPlay();
    };

    startAutoPlay();

    track.parentElement.addEventListener('mouseenter', stopAutoPlay);
    track.parentElement.addEventListener('mouseleave', startAutoPlay);

    window.addEventListener('resize', () => {
        track.style.transition = "none";
        index = 0;
        updateTrack(false);
    });
});
