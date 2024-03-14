<?php
/*
Template Name: страница шаблон - Отзывы 
*/
get_header();
?>

<div class="container">
    <h1 class="visually-hidden">Отзывы</h1>

    <main>
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>&bull;</span>
            <span>Отзывы</span>
        </div>

        <section class="reviews py-10">
            <header class="reviews__header flex items-center justify-between gap flex-col sx:flex-row mb-7">
                <h2 class=" title mb-4 sx:mb-0">Что о нас говорят клиенты</h2>
                <a class="popup-link lk-order-item-button" href="#popup">Оставить отзыв</a>
            </header>
            <ul class="reviews__list grid sx:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-7">
                <li class="relative p-8 bg-light-gray rounded-xl">

                    <div class="flex justify-between items-center">
                        <div class="flex justify-center gap-5 items-center">
                            <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                            <p class="text-black md:text-xl font-medium">Екатерина</p>
                        </div>

                        <div class="flex justify-center gap-2">
                            <span class="font-medium text-black md:text-xl text-base">5.0</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                alt="star">
                        </div>
                    </div>

                    <div class="pt-3">
                        <p class="text-black font-medium md:text-lg text-base">
                            Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                            овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                            Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                            общем, я там постоянный клиент и всем рекомендую!
                        </p>
                    </div>

                    <div class="flex justify-start gap-3 py-3">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                            alt="отзыв_1">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                            alt="отзыв_2">
                    </div>


                    <div class="py-2">
                        <span class="text-gray text-sm font-normal">
                            26.02.2021
                        </span>
                    </div>
                </li>
                <li class="relative p-8 bg-light-gray rounded-xl">

                    <div class="flex justify-between items-center">
                        <div class="flex justify-center gap-5 items-center">
                            <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                            <p class="text-black md:text-xl font-medium">Екатерина</p>
                        </div>

                        <div class="flex justify-center gap-2">
                            <span class="font-medium text-black md:text-xl text-base">5.0</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                alt="star">
                        </div>
                    </div>

                    <div class="pt-3">
                        <p class="text-black font-medium md:text-lg text-base">
                            Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                            овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                            Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                            общем, я там постоянный клиент и всем рекомендую!
                        </p>
                    </div>

                    <div class="flex justify-start gap-3 py-3">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                            alt="отзыв_1">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                            alt="отзыв_2">
                    </div>


                    <div class="py-2">
                        <span class="text-gray text-sm font-normal">
                            26.02.2021
                        </span>
                    </div>
                </li>
                <li class="relative p-8 bg-light-gray rounded-xl">

                    <div class="flex justify-between items-center">
                        <div class="flex justify-center gap-5 items-center">
                            <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                            <p class="text-black md:text-xl font-medium">Екатерина</p>
                        </div>

                        <div class="flex justify-center gap-2">
                            <span class="font-medium text-black md:text-xl text-base">5.0</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                alt="star">
                        </div>
                    </div>

                    <div class="pt-3">
                        <p class="text-black font-medium md:text-lg text-base">
                            Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                            овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                            Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                            общем, я там постоянный клиент и всем рекомендую!
                        </p>
                    </div>

                    <div class="flex justify-start gap-3 py-3">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                            alt="отзыв_1">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                            alt="отзыв_2">
                    </div>


                    <div class="py-2">
                        <span class="text-gray text-sm font-normal">
                            26.02.2021
                        </span>
                    </div>
                </li>
                <li class="relative p-8 bg-light-gray rounded-xl">

                    <div class="flex justify-between items-center">
                        <div class="flex justify-center gap-5 items-center">
                            <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                            <p class="text-black md:text-xl font-medium">Екатерина</p>
                        </div>

                        <div class="flex justify-center gap-2">
                            <span class="font-medium text-black md:text-xl text-base">5.0</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                alt="star">
                        </div>
                    </div>

                    <div class="pt-3">
                        <p class="text-black font-medium md:text-lg text-base">
                            Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                            овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                            Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                            общем, я там постоянный клиент и всем рекомендую!
                        </p>
                    </div>

                    <div class="flex justify-start gap-3 py-3">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                            alt="отзыв_1">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                            alt="отзыв_2">
                    </div>


                    <div class="py-2">
                        <span class="text-gray text-sm font-normal">
                            26.02.2021
                        </span>
                    </div>
                </li>
                <li class="relative p-8 bg-light-gray rounded-xl">

                    <div class="flex justify-between items-center">
                        <div class="flex justify-center gap-5 items-center">
                            <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                            <p class="text-black md:text-xl font-medium">Екатерина</p>
                        </div>

                        <div class="flex justify-center gap-2">
                            <span class="font-medium text-black md:text-xl text-base">5.0</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                alt="star">
                        </div>
                    </div>

                    <div class="pt-3">
                        <p class="text-black font-medium md:text-lg text-base">
                            Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                            овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                            Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                            общем, я там постоянный клиент и всем рекомендую!
                        </p>
                    </div>

                    <div class="flex justify-start gap-3 py-3">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                            alt="отзыв_1">
                        <img class="rounded-lg"
                            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                            alt="отзыв_2">
                    </div>


                    <div class="py-2">
                        <span class="text-gray text-sm font-normal">
                            26.02.2021
                        </span>
                    </div>
                </li>
            </ul>

        </section>

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
    </main>

</div>

<?php get_footer(); ?>