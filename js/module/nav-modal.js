export const initNavModal = () => {
    const btns = document.querySelectorAll('.header__lk-button');
    const modals = document.querySelectorAll('.header__modal-wrapper');

    if (btns) {
        btns.forEach((btn) => {
            const modal = btn.nextElementSibling;

            btn.addEventListener('click', function () {

                if (modal.classList.contains('is-active')) {
                    modal.classList.remove('is-active');
                } else {
                    modals.forEach((item) => {
                        item.classList.remove('is-active');
                    });
                    modal.classList.toggle('is-active');
                }
            });
        });
    }

    const catalogButton = document.querySelector('.catalog-button-catalog');
    const catalogButtonMobile = document.querySelector('.catalog-button-menu');

    const catalogMenu = document.querySelector('.catalog-menu');
    const catalogMenuMobile = document.querySelector('.catalog-menu-mobile');

    if (catalogButton) {
        catalogButton.addEventListener('click', () => {
            catalogMenu.classList.toggle('is-active');
            catalogButton.classList.toggle('is-active');
        });

        catalogButtonMobile.addEventListener('click', () => {
            catalogMenuMobile.classList.toggle('is-active');
            catalogButtonMobile.classList.toggle('is-active');
        });
    }

    const filterButton = document.querySelector('.filter-button');
    const sideMenu = document.querySelector('.side-menu');

    if (filterButton) {
        filterButton.addEventListener('click', () => {
            filterButton.classList.toggle('is-active');
            sideMenu.classList.toggle('is-active');
        });
    }
}
