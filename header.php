<!DOCTYPE html>
<html lang="ru" class="wrapper">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Территория натуральных продуктов">
    <title>RA Market</title>   
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="h-screen grid grid-rows-[auto_1fr_auto]">
        <header class="z-10 w-full md-28 transition-colors header">
            <div class="container gap-5 items-center justify-between flex md:pt-2 header-row">
                <a href="/">
                    <img class="header__logo" loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" width="195" height="55"
                        alt="лого">
                </a>

                <div class="header__menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => 'gap-2 flex-wrap text-main-black hidden md:flex',
                        'menu_id' => ''
                    ]);
                    ?>
                </div>

                <div class="header__contact">
                    <div class="header__item hidden sm:flex">
                        <div class="icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-pin.svg" width="20"
                                height="20" alt="pin">
                        </div>
                        <a href="#map-section">
                            <p>г. Владивосток, </p>
                            <p>ул. ​Проспект Острякова, д. 13</p>
                        </a>
                    </div>

                    <div class="header__item">
                        <div class="icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-phone.svg"
                                width="20" height="20" alt="pin">
                        </div>
                        <a class="link" href="tel:+79084405742">+ 7 (908) 440-57-42</a>
                    </div>

                    <div class="header__item">
                        <div class="icons icons--green">
                            <a href="tel:+79084405742">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-phone.svg"
                                    width="20" height="20" alt="pin">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__inner container">

                <button class="catalog-button catalog-button-catalog">
                    <img class="catalog-button-img-1"
                        src="<?php echo get_template_directory_uri(); ?>/src/img/icons/catalog-button.svg" width="20"
                        height="20" alt="">
                    <img class="catalog-button-img-2"
                        src="<?php echo get_template_directory_uri(); ?>/src/img/icons/catalog-x.svg" width="20"
                        height="20" alt="">
                    <span>Каталог</span>
                </button>

                <button class="catalog-button catalog-button-menu">
                    <img class="catalog-button-img-1"
                        src="<?php echo get_template_directory_uri(); ?>/src/img/icons/catalog-button.svg" width="20"
                        height="20" alt="">
                    <img class="catalog-button-img-2"
                        src="<?php echo get_template_directory_uri(); ?>/src/img/icons/catalog-x.svg" width="20"
                        height="20" alt="">
                    <span>Меню</span>
                </button>

                <ul class="catalog-menu">
                    <?php
                    //получить все категории woocommerce
                    $categories = get_categories(
                        array(
                            'hide_empty' => 0,
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'parent' => 0,
                            'taxonomy' => 'product_cat'
                        )
                    );

                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id); // Получаем ссылку на категорию
                        $category_name = $category->name; // Получаем название категории
                        $term_id = $category->term_id;
                        // получить ссылку на картинку категории
                        $category_image = wp_get_attachment_image_src(
                            get_term_meta($term_id, 'thumbnail_id', true),
                            'full'
                        );
                        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
                        $category_image = wp_get_attachment_image_src($thumbnail_id, 'full');
                        $image_url = $category_image[0] ?? get_template_directory_uri() . '/src/img/catalog/image-1.png';

                        $color = get_field('color', 'term_' . $term_id);
                        ?>
                                        <li class="relative" style="background: #e8f1eb">
                                            <a href="<?php echo esc_url($category_link); ?>">
                                            <p><?php echo esc_html($category_name); ?></p>
                                            <img src="<?php echo esc_url($image_url); ?>" width="102" height="68" alt="img">
                                            </a>
                                        </li>
                                    <?php
                    }
                    ?>
                </ul>

                <div class="catalog-menu-mobile">
                    <div class="menu-mobile-list">
                        <?php wp_nav_menu([
                            'theme_location' => 'top',
                            'container' => '',
                            'menu_class' => '',
                            'menu_id' => ''
                        ]);
                        ?>
                    </div>

                    <ul class="catalog-menu-mobile-list">
                        <?php
                        foreach ($categories as $category) {
                            $category_link = get_category_link($category->term_id); // Получаем ссылку на категорию
                            $category_name = $category->name; // Получаем название категории
                            $term_id = $category->term_id;
                            // получить ссылку на картинку категории
                            $category_image = wp_get_attachment_image_src(
                                get_term_meta($term_id, 'thumbnail_id', true),
                                'full'
                            );
                            $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
                            $category_image = wp_get_attachment_image_src($thumbnail_id, 'full');
                            $image_url = $category_image[0] ?? get_template_directory_uri() . '/src/img/catalog/image-1.png';

                            ?>
                <li class="relative">
                    <a href="<?php echo esc_url($category_link); ?>">
                    <p><?php echo esc_html($category_name); ?></p>
                    <img src="<?php echo esc_url($image_url); ?>" width="102" height="68" alt="img">
                    </a>
                </li>
            <?php
                        }
                        ?>
                    </ul>
                </div>

                <?php get_search_form(); ?>

                <div class="header__buttons">
                    <div class="relative">
                        <div class="header__lk-button">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5356 7.67833L13.0356 3.51166C12.9494 3.3713 12.8114 3.27063 12.6514 3.23151C12.4914 3.19239 12.3224 3.218 12.1812 3.30277C12.04 3.38753 11.938 3.5246 11.8973 3.68418C11.8566 3.84377 11.8806 4.01296 11.9639 4.15499L14.4639 8.32166C14.5501 8.46202 14.6881 8.56269 14.8481 8.60181C15.0081 8.64093 15.1771 8.61532 15.3183 8.53055C15.4595 8.44579 15.5615 8.30872 15.6022 8.14914C15.6429 7.98955 15.6189 7.82036 15.5356 7.67833ZM5.53558 8.32166L8.03558 4.15499C8.11895 4.01296 8.14288 3.84377 8.10219 3.68418C8.06149 3.5246 7.95945 3.38753 7.81825 3.30277C7.67705 3.218 7.5081 3.19239 7.34812 3.23151C7.18815 3.27063 7.05007 3.3713 6.96392 3.51166L4.46392 7.67833C4.38055 7.82036 4.35662 7.98955 4.39731 8.14914C4.43801 8.30872 4.54005 8.44579 4.68125 8.53055C4.82245 8.61532 4.9914 8.64093 5.15138 8.60181C5.31135 8.56269 5.44943 8.46202 5.53558 8.32166Z" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.1165 8.10083C18.1311 8.01143 18.1261 7.91991 18.1019 7.83262C18.0776 7.74534 18.0347 7.66437 17.976 7.59533C17.9174 7.52629 17.8444 7.47083 17.7622 7.43278C17.68 7.39474 17.5904 7.37502 17.4999 7.375H2.49985C2.40926 7.37502 2.31975 7.39474 2.23753 7.43278C2.15532 7.47083 2.08235 7.52629 2.02369 7.59533C1.96504 7.66437 1.92209 7.74534 1.89783 7.83262C1.87357 7.91991 1.86857 8.01143 1.88319 8.10083L3.15402 15.87C3.2418 16.4065 3.51746 16.8944 3.93176 17.2464C4.34607 17.5984 4.87203 17.7917 5.41569 17.7917H14.584C15.1277 17.7917 15.6536 17.5984 16.0679 17.2464C16.4823 16.8944 16.7579 16.4065 16.8457 15.87L18.1165 8.10083ZM9.37486 10.9167V14.25C9.37486 14.4158 9.4407 14.5747 9.55791 14.6919C9.67512 14.8092 9.83409 14.875 9.99986 14.875C10.1656 14.875 10.3246 14.8092 10.4418 14.6919C10.559 14.5747 10.6249 14.4158 10.6249 14.25V10.9167C10.6249 10.7509 10.559 10.5919 10.4418 10.4747C10.3246 10.3575 10.1656 10.2917 9.99986 10.2917C9.83409 10.2917 9.67512 10.3575 9.55791 10.4747C9.4407 10.5919 9.37486 10.7509 9.37486 10.9167ZM12.7082 10.9167V14.25C12.7082 14.4158 12.774 14.5747 12.8912 14.6919C13.0085 14.8092 13.1674 14.875 13.3332 14.875C13.4989 14.875 13.6579 14.8092 13.7751 14.6919C13.8923 14.5747 13.9582 14.4158 13.9582 14.25V10.9167C13.9582 10.7509 13.8923 10.5919 13.7751 10.4747C13.6579 10.3575 13.4989 10.2917 13.3332 10.2917C13.1674 10.2917 13.0085 10.3575 12.8912 10.4747C12.774 10.5919 12.7082 10.7509 12.7082 10.9167ZM6.04152 10.9167V14.25C6.04152 14.4158 6.10737 14.5747 6.22458 14.6919C6.34179 14.8092 6.50076 14.875 6.66652 14.875C6.83228 14.875 6.99125 14.8092 7.10846 14.6919C7.22567 14.5747 7.29152 14.4158 7.29152 14.25V10.9167C7.29152 10.7509 7.22567 10.5919 7.10846 10.4747C6.99125 10.3575 6.83228 10.2917 6.66652 10.2917C6.50076 10.2917 6.34179 10.3575 6.22458 10.4747C6.10737 10.5919 6.04152 10.7509 6.04152 10.9167Z"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.3332 7.375H1.6665C1.50074 7.375 1.34177 7.44085 1.22456 7.55806C1.10735 7.67527 1.0415 7.83424 1.0415 8C1.0415 8.16576 1.10735 8.32473 1.22456 8.44194C1.34177 8.55915 1.50074 8.625 1.6665 8.625H18.3332C18.4989 8.625 18.6579 8.55915 18.7751 8.44194C18.8923 8.32473 18.9582 8.16576 18.9582 8C18.9582 7.83424 18.8923 7.67527 18.7751 7.55806C18.6579 7.44085 18.4989 7.375 18.3332 7.375Z"/>
</svg>

                            <span><?php echo minicart_count_after_content(); ?>&nbsp;шт&nbsp;(<?php minicard_subtotal(); ?>)</span>
                        </div>

                        <?php
                        // если страница оформления заказа
                        
                        if (is_checkout()) {

                        } elseif (is_cart()) {

                        } else {
                            ?>
                <div class="header__modal-wrapper header__modal-wrapper--cart">
                    <div class="mini-card">
                        <?php the_widget('WC_Widget_Cart', 'title=') ?>
                    </div>
                </div>
                <?php
                        }
                        ?>
                    </div>

                    <div class="relative">
                        <div class="header__lk-button header__lk-button--mobile">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_213_6274)">
<path d="M8 0.5C5.67378 0.5 3.78125 2.39253 3.78125 4.71875C3.78125 7.04497 5.67378 8.9375 8 8.9375C10.3262 8.9375 12.2188 7.04497 12.2188 4.71875C12.2188 2.39253 10.3262 0.5 8 0.5ZM13.2489 11.6936C12.0939 10.5208 10.5628 9.875 8.9375 9.875H7.0625C5.43725 9.875 3.90606 10.5208 2.75106 11.6936C1.60172 12.8606 0.96875 14.401 0.96875 16.0312C0.96875 16.2901 1.17862 16.5 1.4375 16.5H14.5625C14.8214 16.5 15.0312 16.2901 15.0312 16.0312C15.0312 14.401 14.3983 12.8606 13.2489 11.6936Z"/>
</g>
<defs>
<clipPath id="clip0_213_6274">
<rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg>

                            <span>Вход/регистрация</span>
                        </div>
                        <div class="header__modal-wrapper">
                            <?php wp_nav_menu([
                                'theme_location' => 'lk',
                                'container' => '',
                                'menu_class' => 'lk-menu-list',
                                'menu_id' => ''
                            ]);
                            ?>
                        </div>
                    </div>

                    <a href="https://ra-market.ru/?page_id=101" class="header__lk-button header__lk-button--mobile header__lk-button--heart">
                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 4.87457C16 5.99931 15.5839 7.11589 14.7438 7.97166L8.56703 14.2636C8.40701 14.4185 8.20699 14.5 7.99896 14.5C7.79093 14.5 7.59091 14.4185 7.43089 14.2636L1.2541 7.97166C0.450857 7.14858 0 6.03516 0 4.87457C0 3.71399 0.450857 2.60057 1.2541 1.77749C2.06211 0.959265 3.15515 0.5 4.29449 0.5C5.43382 0.5 6.52686 0.959265 7.33487 1.77749L7.99896 2.46211L8.66304 1.77749C9.47106 0.959265 10.5641 0.5 11.7034 0.5C12.8428 0.5 13.9358 0.959265 14.7438 1.77749C15.1436 2.18364 15.4605 2.66644 15.6761 3.19802C15.8917 3.7296 16.0018 4.29942 16 4.87457Z"/>
</svg>
                        <span>Любимые&nbsp;товары</span>
                    </a>
                </div>
            </div>


        </header>