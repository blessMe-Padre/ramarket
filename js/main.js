import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initCurrentYear } from "./module/current-year.js";
import { initScrollToTop } from "./module/scroll-to-top.js";
import { initScroll } from "./module/scroll.js";
import { initNavModal } from "./module/nav-modal.js";
import { initAccordionMenu } from "./module/accordions.js";
import { initPopup } from "./module/popup.js";
import { initTab } from "./module/tab.js";
import { initDistance } from "./module/distance.js";
import { init404 } from "./module/404.js";
import { initLk } from "./module/lk.js";

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initSlider();
    initCurrentYear();
    initScrollToTop();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initNavModal();
    initAccordionMenu();
    initPopup();
    initTab();
    initDistance();
    init404();
    initLk();
    // DOMContentLoaded

});
