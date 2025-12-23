// resources/js/team.js

document.addEventListener('DOMContentLoaded', () => {
    const grid = document.querySelector('.ws-team-grid');
    const cards = Array.from(document.querySelectorAll('[data-team-card]'));
    if (!grid || !cards.length) return;

    const ACTIVE_CLASS = 'ws-team-card--active';
    const INACTIVE_CLASS = 'ws-team-card--inactive';
    const HAS_ACTIVE_CLASS = 'ws-team-grid--has-active';

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
        // 1) FIRST: posizione e dimensioni PRIMA del cambio di stato
        const firstRects = cards.map((card) => card.getBoundingClientRect());

        // 2) Applica subito il nuovo stato (layout cambia qui)
        applyState(selectedCard);

        // 3) LAST: posizione e dimensioni DOPO il cambio
        const lastRects = cards.map((card) => card.getBoundingClientRect());

        // 4) INVERT: setta transform iniziale per far sembrare tutto fermo
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

        // Force reflow per far "prendere" i transform iniziali
        void grid.offsetHeight;

        // 5) PLAY: animiamo andando a transform: none (il layout è già quello finale)
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
