export const initStickyHeader = () => {

    const header = document.querySelector('header');
    const headerRow = document.querySelector('.header-row');
    const headerInner = document.querySelector('.header__inner');
    const main = document.querySelector('main');
    const headerHeight = header.offsetHeight;
    main.style.marginTop = headerHeight + 'px';

    if (header) {
        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;
            if (scrollTop >= 50) {
                header.classList.add('header-fix');
                headerRow.classList.add('is-active');
                headerInner.classList.add('is-active');
            } else {
                header.classList.remove('header-fix');
                headerRow.classList.remove('is-active');
                headerInner.classList.remove('is-active');
            }
        });
    }
}