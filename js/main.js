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
import { initCheckBox } from "./module/checkbox.js";
import { initStickyHeader } from "./module/sticky-header.js";
import { initScrollAnimation } from "./module/scroll-animation.js";
import { initMask } from "./module/phone-mask.js";

function rebuild_input_file(input) {
    let input_id = input.attr('id');
    input.attr('accept', 'image/*').wrap('<span class="hidden"></span>').parent().after('<label for="' + input_id + '" class="file__button"></label>');
}

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initSlider();
    initCurrentYear();
    // initScrollToTop();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initNavModal();
    initAccordionMenu();
    initPopup();
    initTab();
    initDistance();
    init404();
    initLk();
    initCheckBox();
    initScrollAnimation();
    initStickyHeader();
    initScrollAnimation();
    initMask();
    // DOMContentLoaded

    rebuild_input_file(jQuery('input[name="featured_image"]'));

    jQuery('body').on('change', 'input[name="featured_image"]', function (event_object) {
        let input_file = jQuery(event_object.currentTarget);
        let file_name = input_file.val().split("\\").reverse()[0];

        jQuery('label[for="' + input_file.attr('id') + '"].file__button').text(file_name);
    });
});
