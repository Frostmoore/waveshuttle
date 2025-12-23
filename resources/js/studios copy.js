document.addEventListener('DOMContentLoaded', () => {
    const grid  = document.querySelector('.ws-studios-grid');
    const cards = Array.from(document.querySelectorAll('[data-studio-card]'));
    if (!grid || !cards.length) return;

    function resetStudios() {
        cards.forEach((card) => {
            card.classList.remove('ws-studio-card--active', 'ws-studio-card--inactive');
        });
        grid.classList.remove('ws-studios-grid--has-active');
    }

    function activateStudio(selected) {
        grid.classList.add('ws-studios-grid--has-active');

        cards.forEach((card) => {
            if (card === selected) {
                card.classList.add('ws-studio-card--active');
                card.classList.remove('ws-studio-card--inactive');
            } else {
                card.classList.add('ws-studio-card--inactive');
                card.classList.remove('ws-studio-card--active');
            }
        });
    }

    cards.forEach((card) => {
        card.addEventListener('click', () => {
            const isActive = card.classList.contains('ws-studio-card--active');

            if (isActive) {
                resetStudios();
            } else {
                activateStudio(card);
            }
        });
    });
});
