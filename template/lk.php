<?php
/*
Template Name: страница шаблон - Личный кабинет
*/
get_header();
?>
<div class="container">
    <main>
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>&bull;</span>
            <span>Личный кабинет</span>
        </div>

        <h1 class="font-semibold text-4xl mb-8">Привет, Иван!</h1>

        <div class="_tabs">
            <nav class="flex gap-8 lk-nav">
                <button class="_tabs-item lk-button" data-tab="#tab1">Профиль</button>
                <button class="_tabs-item lk-button" data-tab="#tab2">История заказов</button>
                <button class="_tabs-item lk-button _active" data-tab="#tab3">Любимые товары</button>
            </nav>

            <div class="_tabs-block profile-list" id="tab1">
                <h2 class="font-bold">Ваши данные</h2>
                <ul>
                    <li>
                        <form class="form-lk" action="#">
                            <div class="form-lk__item">
                                <div class="form-lk__item">
                                    <label for="formName">Введите имя</label>
                                    <input id="formName" type="text" name="name">
                                </div>
                            </div>

                            <div class="form-lk__item">
                                <div class="form-lk__item">
                                    <label for="formName">Электронная почта</label>
                                    <input id="formName" type="email" name="email">
                                </div>
                            </div>

                            <div class="form-lk__item">
                                <div class="form-lk__item">
                                    <label for="formName">Дата рождения</label>
                                    <input id="formName" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-lk__item">
                                <div class="form-lk__item">
                                    <label for="formName">Пароль</label>
                                    <input id="formName" type="password" name="password">
                                </div>
                            </div>

                        </form>
                    </li>
                </ul>

            </div>
            <div class="_tabs-block" id="tab2">
                <ul class="lk-order-list">
                    <li class="lk-order-item">
                        <div class="flex justify-between mb-5">
                            <div>
                                <span class="font-medium block">Заказ №100132</span>
                                <span class="text-lg font-bold">20 апреля</span>
                            </div>
                            <span class="text-xl font-bold">7 150 ₽</span>
                        </div>
                        <p class="text-dark-gray mb-5">7 товаров (0,7 кг)</p>
                        <div class="flex flex-wrap gap-5 items-center justify-between">
                            <ul class="flex gap-3">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                            </ul>
                            <button class="lk-order-item-button">
                                <span>Повторить</span>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.60654 2.22266C11.2793 2.91714 13.249 5.3026 13.249 8.13859C13.249 11.5187 10.451 14.2588 6.99952 14.2588C3.54801 14.2588 0.75 11.5187 0.75 8.13859C0.75 5.3026 2.71972 2.91714 5.3925 2.22266"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M4.43945 1.44922L5.86995 2.21005L5.10912 3.64055" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                        </div>
                    </li>
                    <li class="lk-order-item">
                        <div class="flex justify-between mb-5">
                            <div>
                                <span class="font-medium block">Заказ №100132</span>
                                <span class="text-lg font-bold">20 апреля</span>
                            </div>
                            <span class="text-xl font-bold">7 150 ₽</span>
                        </div>
                        <p class="text-dark-gray mb-5">7 товаров (0,7 кг)</p>
                        <div class="flex flex-wrap gap-5 items-center justify-between">
                            <ul class="flex gap-3">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/src/img/order-img.png"
                                        width="60" height="60" alt="img"></li>
                            </ul>
                            <button class="lk-order-item-button">
                                <span>Повторить</span>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.60654 2.22266C11.2793 2.91714 13.249 5.3026 13.249 8.13859C13.249 11.5187 10.451 14.2588 6.99952 14.2588C3.54801 14.2588 0.75 11.5187 0.75 8.13859C0.75 5.3026 2.71972 2.91714 5.3925 2.22266"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M4.43945 1.44922L5.86995 2.21005L5.10912 3.64055" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="_tabs-block _active" id="tab3">
                <ul class="catalog__list">
                    <li class="relative new-slide card catalog__list-item">
                        <a href="#">
                            <img class="card__img mb-5"
                                src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-4.png"
                                width="148" height="203" alt="product">
                            <span class="card__attr mb-5">250 мл</span>
                            <h3 class="card__title">MAYO Mayoner Майонез натуральный с трюфелем (веган,
                                без гютена)</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-5">
                            <span class="card__price">590 ₽</span>
                            <div class="flex items-center gap-5">
                                <button class="card__to-card" href="#">В корзину</button>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg"
                                        width="25" height="25" alt="добавить в избранное">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative new-slide card catalog__list-item">
                        <a href="#">
                            <img class="card__img mb-5"
                                src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-4.png"
                                width="148" height="203" alt="product">
                            <span class="card__attr mb-5">250 мл</span>
                            <h3 class="card__title">MAYO Mayoner Майонез натуральный с трюфелем (веган,
                                без гютена)</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-5">
                            <span class="card__price">590 ₽</span>
                            <div class="flex items-center gap-5">
                                <button class="card__to-card" href="#">В корзину</button>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg"
                                        width="25" height="25" alt="добавить в избранное">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative new-slide card catalog__list-item">
                        <a href="#">
                            <img class="card__img mb-5"
                                src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-4.png"
                                width="148" height="203" alt="product">
                            <span class="card__attr mb-5">250 мл</span>
                            <h3 class="card__title">MAYO Mayoner Майонез натуральный с трюфелем (веган,
                                без гютена)</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-5">
                            <span class="card__price">590 ₽</span>
                            <div class="flex items-center gap-5">
                                <button class="card__to-card" href="#">В корзину</button>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg"
                                        width="25" height="25" alt="добавить в избранное">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative new-slide card catalog__list-item">
                        <a href="#">
                            <img class="card__img mb-5"
                                src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-4.png"
                                width="148" height="203" alt="product">
                            <span class="card__attr mb-5">250 мл</span>
                            <h3 class="card__title">MAYO Mayoner Майонез натуральный с трюфелем (веган,
                                без гютена)</h3>
                        </a>
                        <div class="flex flex-wrap items-center gap-5">
                            <span class="card__price">590 ₽</span>
                            <div class="flex items-center gap-5">
                                <button class="card__to-card" href="#">В корзину</button>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg"
                                        width="25" height="25" alt="добавить в избранное">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </main>
</div>
<?php get_footer(); ?>