document.addEventListener('DOMContentLoaded', () => {
    const grid  = document.querySelector('.ws-team-grid');
    const cards = Array.from(document.querySelectorAll('[data-team-card]'));
    if (!grid || !cards.length) return;

    function resetCards() {
        cards.forEach((card) => {
            card.classList.remove('ws-team-card--active', 'ws-team-card--inactive');
        });
        grid.classList.remove('ws-team-grid--has-active');
    }

    function activateCard(selected) {
        grid.classList.add('ws-team-grid--has-active');

        cards.forEach((card) => {
            if (card === selected) {
                card.classList.add('ws-team-card--active');
                card.classList.remove('ws-team-card--inactive');
            } else {
                card.classList.add('ws-team-card--inactive');
                card.classList.remove('ws-team-card--active');
            }
        });
    }

    cards.forEach((card) => {
        card.addEventListener('click', () => {
            const isActive = card.classList.contains('ws-team-card--active');

            if (isActive) {
                resetCards();
            } else {
                activateCard(card);
            }
        });
    });
});
