import "./index.css";

import Htmx from 'htmx.org';

window.htmx = Htmx;

console.log('initialized htmx');

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';

Alpine.plugin(persist);
window.Alpine = Alpine;

console.log('initialized alpinejs');

Alpine.store('darkMode', {
  on: Alpine.$persist(false).as('darkMode_on'),
  
  toggle() {
    this.on = ! this.on
  }
});

Alpine.start();