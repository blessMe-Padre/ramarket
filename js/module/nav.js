export const initNav = () => {
    const body = document.querySelector('body');
    // Меню
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuButton = document.querySelector('.btn-close-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');

    if (menuButton) {
        menuButton.addEventListener('click', e => {
            menuButton.classList.toggle('active');
            mobileMenu.classList.toggle('is-active');
            body.classList.toggle('lock');
        });
    }

    if (mobileMenuLinks) {
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', (evt) => {
                evt.preventDefault();
                menuButton.classList.remove('active');
                mobileMenu.classList.remove('is-active');
                body.classList.remove('lock');
            });
        });
    }
}