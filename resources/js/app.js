import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { library,dom} from '@fortawesome/fontawesome-svg-core';

import { faEye } from '@fortawesome/free-solid-svg-icons/faEye';
import { faChevronLeft } from '@fortawesome/free-solid-svg-icons/faChevronLeft';
import { faEdit } from '@fortawesome/free-solid-svg-icons/faEdit';
import { faTimes } from '@fortawesome/free-solid-svg-icons/faTimes';
import { faCheck } from '@fortawesome/free-solid-svg-icons/faCheck';

library.add(
    faEye,
    faChevronLeft,
    faEdit,
    faCheck,
    faTimes,
)

dom.watch()
