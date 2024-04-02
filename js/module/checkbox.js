export const initCheckBox = () => {
    // Сначала получаем все чекбоксы внутри элементов с классом 'wpfLiLabel'
    const checkboxes = document.querySelectorAll('.filters-row .wpfLiLabel .wpfCheckbox input[type="checkbox"]');
    // Функция для обновления класса 'is-active'
    function updateActiveClass() {
        // Проверяем, установлен ли флажок
        if (this.checked) {
            // Если да, добавляем класс 'is-active' к родительскому элементу 'wpfLiLabel'
            this.closest('.wpfLiLabel').classList.add('is-active');
        } else {
            // Если нет, удаляем класс 'is-active'
            this.closest('.wpfLiLabel').classList.remove('is-active');
        }
    }

    // Добавляем обработчик событий к каждому чекбоксу
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateActiveClass);

        // Начальное обновление классов при загрузке страницы
        if (checkbox.checked) {
            checkbox.closest('.wpfLiLabel').classList.add('is-active');
        }
    });


    // ==================================================================================================

    const checkbox1 = document.querySelector('.filter-main input[type="checkbox"]');
    console.log(checkbox1);
    function updateActiveClass1() {
        if (this.checked) {
            this.closest('.wpfCheckbox').classList.add('is-active');
        } else {
            this.closest('.wpfCheckbox').classList.remove('is-active');
        }
    }

    checkbox1.addEventListener('change', updateActiveClass1);

    if (checkbox1.checked) {
        checkbox1.closest('.wpfCheckbox').classList.add('is-active');
    }


    // const umField = document.querySelector('#um_field_93_avatar');
    // if (umField) {
    //     const umClears = umField.querySelectorAll('.um-clear');
    //     umClears.forEach((item) => {
    //         console.log(item);
    //         item.remove();
    //     })
    // }
}