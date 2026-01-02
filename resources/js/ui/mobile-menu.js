// resources/js/ui/mobile-menu.js

export function initMobileMenu() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu   = document.getElementById('mobile-menu');
    const icon   = document.getElementById('mobile-menu-icon');

    if (!toggle || !menu || !icon) return;

    let isOpen = false;

    function setState(open) {
        isOpen = open;

        if (isOpen) {
            menu.classList.add('ws-mobile-menu--open');
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
        } else {
            menu.classList.remove('ws-mobile-menu--open');
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
        }
    }

    // toggle al click sul bottone
    toggle.addEventListener('click', () => {
        setState(!isOpen);
    });

    // chiudi quando clicchi un link del menù
    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            setState(false);
        });
    });

    // se torni su desktop, chiudi il menù
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && isOpen) {
            setState(false);
        }
    });
}
