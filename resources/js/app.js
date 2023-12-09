import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { library,dom} from '@fortawesome/fontawesome-svg-core';
import { faEye } from '@fortawesome/free-solid-svg-icons/faEye';
import { faChevronLeft } from '@fortawesome/free-solid-svg-icons/faChevronLeft';

library.add(faEye, faChevronLeft)

dom.watch()
