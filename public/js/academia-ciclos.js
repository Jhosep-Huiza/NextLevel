document.addEventListener('DOMContentLoaded', () => {
    const grid = document.querySelector('.ciclos-grid');
    const cards = document.querySelectorAll('.ciclo-card');
    const defaultFeatured = document.querySelector('.ciclo-card.featured');

    const setHighlight = (targetCard) => {
        cards.forEach(card => card.classList.remove('active-highlight'));
        if (targetCard) {
            targetCard.classList.add('active-highlight');
        }
    };

    setHighlight(defaultFeatured);

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            setHighlight(card);
        });
    });

    if (grid) {
        grid.addEventListener('mouseleave', () => {
            setHighlight(defaultFeatured);
        });
    }
});
