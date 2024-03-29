<!DOCTYPE html>
<html lang="ru" class="wrapper">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>RA Market</title>   
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="h-screen grid grid-rows-[auto_1fr_auto]">
        <header class="z-10 w-full md-28 transition-colors header">
            <div class="container gap-5 items-center justify-between flex md:pt-2">
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
                        <div>
                            <p>г. Владивосток, </p>
                            <p>ул. ​Проспект Острякова, д. 13</p>
                        </div>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-cart.svg"
                                width="20" height="20" alt="cart">
                            <span><?php echo minicart_count_after_content(); ?>&nbsp;шт&nbsp;(<?php minicard_subtotal(); ?>)</span>
                            
                        </div>

                        <div class="header__modal-wrapper">
                        <div class="mini-card">
                                    <?php the_widget('WC_Widget_Cart', 'title=') ?>
                                </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="header__lk-button header__lk-button--mobile">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-person.svg"
                                width="20" height="20" alt="icon-person">
                            <span>Вход/регистрация</span>
                        </div>
                        <div class="header__modal-wrapper">
                            <?php wp_nav_menu([
                                'theme_location' => 'lk',
                                'container' => '',
                                'menu_class' => '',
                                'menu_id' => ''
                            ]);
                            ?>
                        </div>
                    </div>

                    <a href="https://ra-market.ru/?page_id=101" class="header__lk-button header__lk-button--mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg" width="20"
                            height="20" alt="icon-heart">
                        <span>Любимые&nbsp;товары</span>
                    </a>
                </div>
            </div>


        </header>