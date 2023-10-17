import "./index.css";


import Htmx from 'htmx.org';
window.htmx = Htmx;
console.log('initialized htmx');

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
console.log('initialized alpinejs');