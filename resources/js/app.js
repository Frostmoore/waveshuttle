import './bootstrap';

import Alpine from 'alpinejs';
import './team';
import './studios';
import { initMobileMenu } from './ui/mobile-menu';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
});

window.Alpine = Alpine;

Alpine.start();
