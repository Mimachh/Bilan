import './bootstrap';

import Alpine from 'alpinejs';
import { countBy } from 'lodash';

window.Alpine = Alpine;

Alpine.start();


/* Nav Bar */
const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});


