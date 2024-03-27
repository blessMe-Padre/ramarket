export const initStickyHeader = () => {

    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const headerHeight = header.offsetHeight;
    main.style.marginTop = headerHeight + 'px';

    if (header) {
        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;
            if (scrollTop >= 50) {
                header.classList.add('header-fix');
            } else {
                header.classList.remove('header-fix');
            }
        });
    }
}