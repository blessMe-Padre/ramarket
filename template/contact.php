<?php
/*
Template Name: страница шаблон - Контакты
*/
get_header();
?>

<h1 class="visually-hidden">Контакты</h1>

<main>
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>&bull;</span>
            <span>Контакты</span>
        </div>
    </div>

    <section class="contact py-20">
        <div class="container">
            <h2 class="title">Мы во Владивостоке</h2>
            <div class="contact__header flex items-center flex-wrap gap-4 sm:gap-8 mb-12">
                <div class="flex items-center gap-5">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-pin.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <p class="font-medium text-sm">г. Владивосток,
                        ул. ​Проспект Острякова, д. 13</p>
                </div>
                <div class="flex items-center gap-5">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-phone.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <a class="font-medium text-sm" href="tel:+79084405742">+ 7 (908) 440-57-42</a>
                </div>

                <a href="#popup" class="ra-button popup-link">Заказать звонок</a>
            </div>

            <div class="contact__map rounded-3xl grid">
                <iframe class="rounded-3xl block"
                    src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=131.899555%2C43.133904&mode=search&oid=62912864346&ol=biz&z=19.11"
                    width="100%" height="100%" frameborder="1" allowfullscreen="true"
                    style="position:relative; height: 100%;"></iframe>
            </div>
        </div>
    </section>

    <section class="requisites">
        <div class="container">
            <h2 class="title">Реквизиты компании</h2>
            <div class="requisites__wrapper">
                <div class="requisites__block">
                    <ul class="requisites__list">
                        <li class="requisites__item">
                            <p class="font-medium max-w-[240px]">Полное и краткое наименование предприятия</p>
                            <p class="max-w-[260px]">Индивидуальный предприниматель Чичулина Раиса Степановна,
                                Чичулина Р. С.
                                (ИП)
                            </p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Юридический адрес</p>
                            <p>6900078, г. Владивосток, Амурская ул., д. 21, кв.31</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Почтовый адрес</p>
                            <p>690078, г. Владивосток, Амурская д. 21, кв. 31
                            </p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Номера телефонов</p>
                            <p>
                                <a href="tel:+79084405742">+7(908) 440-57-42</a> ,
                                <a href="tel:+79677177729">+7(967) 717-77-29</a>
                            </p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">ИНН</p>
                            <p>6254001160805</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">ОГРНИП</p>
                            <p>307254011300016</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Наименование банка</p>
                            <p>ПАБ АКБ «Приморье»</p>
                        </li>
                    </ul>
                </div>
                <div class="requisites__block">
                    <ul class="requisites__list">
                        <li class="requisites__item">
                            <p class="font-medium">Расчетный счет</p>
                            <p>40802810100141354601</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Местонахождение банка</p>
                            <p>г. Владивосток</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">Корреспондентский счет</p>
                            <p>30101810100000000795</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">БИК</p>
                            <p>040507795</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">ОКПО</p>
                            <p>01522667982</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">октмо</p>
                            <p>05701000</p>
                        </li>
                        <li class="requisites__item">
                            <p class="font-medium">ОКВЭД</p>
                            <p>47.21; 47.25.12; 52.27.3; 52.27</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

</main>

<section id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>
            <h2 class="text-start text-main-black z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">
                Закажите звонок</h2>
            <div>
                <p class="font-semibold text-lg max-w-xs">Оставьте контакты и менеджер свяжется с вами в
                    ближайшее время</p>
            </div>
            <div class="form-wrapper">
                <form action="#" id="form" class="form validate-form flex-col">
                    <div class="form__item">
                        <label for="formName">Введите имя</label>
                        <input id="formName" type="text" name="name">
                    </div>

                    <div class="form__item">
                        <label for="formName">Введите номер</label>
                        <input id="formPhone" type="tel" name="phone">
                    </div>


                    <button type="submit">Заказать звонок</button>
                </form>
            </div>
            <p class="form-section__descriptions w-full">Нажимая кнопку “отправить заявку” вы даёте
                согласие на <a class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку
                    персональных
                    данных</a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>