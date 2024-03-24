import { docReady } from './utils';
import detectorInit from './detector';
import navbarInit from './navbar';
import formValidationInit from './form-validation';
import swiperInit from './swiper';
import countupInit from './countup';
import scrollToTopInit from './scroll-to-top';

/* -------------------------------------------------------------------------- */
/*                            Theme Initialization                            */
/* -------------------------------------------------------------------------- */
docReady(detectorInit);
docReady(navbarInit);
docReady(formValidationInit);
docReady(swiperInit);
docReady(countupInit);
docReady(scrollToTopInit);
