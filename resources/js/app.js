import jquery from "jquery";

window.$ = window.jQuery = jquery;


require('./main/bootstrap.bundle.min');

require('./main/metisMenu.min');

require('./main/simplebar.min');

require('./main/waves.min');

require('./main');

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();