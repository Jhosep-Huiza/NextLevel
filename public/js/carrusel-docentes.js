document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('alumnosTrack');
    const next = document.getElementById('aluNextBtn');
    const prev = document.getElementById('aluPrevBtn');
    const originalCards = Array.from(track.querySelectorAll('.alumno-card-modern'));
    const totalOriginal = originalCards.length;

    originalCards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });

    let index = 0;
    let isTransitioning = false;
    let autoPlayInterval;
    let isVideoPlaying = false;

    const moveNext = () => {
        if (isTransitioning || isVideoPlaying) return;
        index++;
        updateTrack(true);
    };

    const movePrev = () => {
        if (isTransitioning || isVideoPlaying) return;
        if (index <= 0) {
            index = totalOriginal;
            updateTrack(false);
            setTimeout(() => { index--; updateTrack(true); }, 10);
        } else {
            index--;
            updateTrack(true);
        }
    };

    function updateTrack(animate = true) {
        const card = track.querySelector('.alumno-card-modern');
        const gap = 25;
        const cardWidth = card.offsetWidth;

        track.style.transition = animate ? "transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)" : "none";
        track.style.transform = `translateX(-${index * (cardWidth + gap)}px)`;

        if (animate) {
            isTransitioning = true;
            track.addEventListener('transitionend', function handler() {
                track.removeEventListener('transitionend', handler);
                isTransitioning = false;
                if (index >= totalOriginal) {
                    index = 0;
                    updateTrack(false);
                }
            });
        }
    }

    const allVideos = track.querySelectorAll('video');

    allVideos.forEach(video => {

        video.addEventListener('play', () => {
            isVideoPlaying = true;
            stopAutoPlay();

            allVideos.forEach(v => { if(v !== video) v.pause(); });
        });

        video.addEventListener('ended', () => {
            isVideoPlaying = false;
            startAutoPlay();
        });

        video.addEventListener('pause', () => {
            isVideoPlaying = false;
            startAutoPlay();
        });
    });

    next.addEventListener('click', () => { moveNext(); resetAutoPlay(); });
    prev.addEventListener('click', () => { movePrev(); resetAutoPlay(); });

    const startAutoPlay = () => {
        if (!autoPlayInterval && !isVideoPlaying) {
            autoPlayInterval = setInterval(moveNext, 4000);
        }
    };

    const stopAutoPlay = () => {
        clearInterval(autoPlayInterval);
        autoPlayInterval = null;
    };

    const resetAutoPlay = () => {
        stopAutoPlay();
        startAutoPlay();
    };

    startAutoPlay();

    track.parentElement.addEventListener('mouseenter', stopAutoPlay);
    track.parentElement.addEventListener('mouseleave', () => {
        if (!isVideoPlaying) startAutoPlay();
    });

    window.addEventListener('resize', () => {
        track.style.transition = "none";
        index = 0;
        updateTrack(false);
    });
});
