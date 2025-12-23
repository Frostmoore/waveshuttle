// resources/js/studios.js

document.addEventListener('DOMContentLoaded', () => {
    const grid = document.querySelector('.ws-studios-grid');
    const cards = Array.from(document.querySelectorAll('[data-studio-card]'));
    if (!grid || !cards.length) return;

    const ACTIVE_CLASS = 'ws-studio-card--active';
    const INACTIVE_CLASS = 'ws-studio-card--inactive';
    const HAS_ACTIVE_CLASS = 'ws-studios-grid--has-active';

    function applyState(selectedCard) {
        if (!selectedCard) {
            grid.classList.remove(HAS_ACTIVE_CLASS);
            cards.forEach((card) => {
                card.classList.remove(ACTIVE_CLASS, INACTIVE_CLASS);
            });
            return;
        }

        grid.classList.add(HAS_ACTIVE_CLASS);

        cards.forEach((card) => {
            if (card === selectedCard) {
                card.classList.add(ACTIVE_CLASS);
                card.classList.remove(INACTIVE_CLASS);
            } else {
                card.classList.add(INACTIVE_CLASS);
                card.classList.remove(ACTIVE_CLASS);
            }
        });
    }

    function flipToState(selectedCard) {
        // FIRST
        const firstRects = cards.map((card) => card.getBoundingClientRect());

        // Applica nuovo stato
        applyState(selectedCard);

        // LAST
        const lastRects = cards.map((card) => card.getBoundingClientRect());

        // INVERT
        cards.forEach((card, index) => {
            const first = firstRects[index];
            const last = lastRects[index];

            const dx = first.left - last.left;
            const dy = first.top - last.top;
            const sx = first.width / last.width || 1;
            const sy = first.height / last.height || 1;

            card.style.transformOrigin = 'top left';
            card.style.transform = `translate(${dx}px, ${dy}px) scale(${sx}, ${sy})`;
        });

        void grid.offsetHeight;

        // PLAY
        cards.forEach((card) => {
            card.style.transition =
                'transform 0.8s cubic-bezier(0.22, 0.61, 0.36, 1), ' +
                'opacity 0.6s ease-out, ' +
                'box-shadow 0.8s cubic-bezier(0.22, 0.61, 0.36, 1)';
            card.style.transform = '';
        });

    }

    cards.forEach((card) => {
        card.addEventListener('click', () => {
            const isActive = card.classList.contains(ACTIVE_CLASS);

            if (isActive) {
                flipToState(null);
            } else {
                flipToState(card);
            }
        });
    });
});
