export const initAccordionMenu = () => {
    const accordion = document.querySelectorAll('.side-menu > li');
    console.log(accordion);

    accordion.forEach((el) => {
        const button = el.querySelector('a');
        const content = el.querySelector('ul');

        if (button) {
            button.addEventListener('click', (evt) => {

                if (content) {
                    evt.preventDefault();

                    const currentButton = evt.currentTarget;
                    currentButton.classList.toggle('is-active');
                    content.classList.toggle('is-active');

                    if (currentButton.classList.contains('is-active')) {
                        content.style.maxHeight = 'max-content';
                    } else {
                        content.style.maxHeight = null;
                    }
                }
            });
        }

    });


    const addAccordionArrowClass = () => {
        const liElements = document.querySelectorAll('.side-menu li');

        liElements.forEach(li => {
            const hasUlChild = li.querySelector('ul') !== null;

            if (hasUlChild) {
                const link = li.querySelector('a');
                if (link) {
                    link.classList.add('accordion-arrow');
                }
            }
        });
    }

    addAccordionArrowClass();
}