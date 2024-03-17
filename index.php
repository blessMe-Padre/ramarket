<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Территория натуральных продуктов</h1>

    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <h2 class="hero__title">Территория натуральных продуктов</h2>

                <a class="hero__button" href="shop/">В каталог</a>
            </div>
        </div>
    </section>

    <section class="category">
        <h2 class="visually-hidden">Категории натуральных продуктов</h2>
        <div class="container">
            <div class="w-0 min-w-[100%] relative">
                <div class="category-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide category-slide">
                            <div class="relative">
                                <p>Овощи</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide category-slide">
                            <div class="relative">
                                <p>Тайские фрукты</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-2.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide category-slide">
                            <div class="relative">
                                <p>Ягоды</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-3.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide category-slide">
                            <div class="relative">
                                <p>Зелень</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev--category"></div>
                <div class="swiper-button-next swiper-button-next--category"></div>
            </div>
        </div>
    </section>

    <section class="new py-20">
        <div class="container">
            <h2 class="title">Новые поступления</h2>
            <div class="w-0 min-w-[100%] relative">
                <div class="new-swiper swiper">
                    <ul class="swiper-wrapper justify-items-stretch">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1,
                            'product_cat' => 'new', // Замените 'news' на слаг вашей категории
                        );

                        $loop = new WP_Query($args);

                        if ($loop->have_posts()) {
                            while ($loop->have_posts()):
                                $loop->the_post();
                                global $product;
                                $product_id = get_the_ID();

                                echo '<li class="relative swiper-slide new-slide card h-auto relative card product type-product post-46 status-publish first instock product_cat-new has-post-thumbnail shipping-taxable purchasable product-type-simple woocommerce">';
                                echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';
                                if (has_post_thumbnail($loop->post->ID)) {
                                    echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                }
                                echo '<span class="card__attr mb-5">250 мл</span>';
                                echo '<h3 class="card__title">' . esc_html($loop->post->post_title) . '</h3>';
                                echo '</a>';
                                echo '<div class="flex flex-wrap items-center gap-5">';
                                echo '<span class="card__price">' . wc_price($product->get_price()) . '</span>';
                                echo '<div class="flex items-center gap-5 relative">';

                                echo '<a href="?add-to-cart=' . $product_id . '" class="relative card__to-card button button product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1" data-product_id="' . $product_id . '" data-product_sku="' . $product->get_sku() . '" aria-label="' . __('Добавить в корзину', 'domain') . '" rel="nofollow">В корзину</a>';

                                echo '<a href="#">';
                                echo '<img src="' . get_template_directory_uri() . '/src/img/icons/icon-heart.svg"
                                    width="25" height="25" alt="добавить в избранное">';
                                echo '</a>';
                                // echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                echo '</div>';
                                echo '</div>';
                                echo '</li>';


                            endwhile;
                        } else {
                            echo __('Товаров не найдено');
                        }

                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>

                <div class="swiper-button-prev swiper-button-prev--new"></div>
                <div class="swiper-button-next swiper-button-next--new"></div>
            </div>

        </div>
    </section>

    <section class="favorite py-20">
        <div class="container">
            <h2 class="title">Любимые товары покупателей</h2>
            <div class="w-0 min-w-[100%] relative">
                <div class="favorite-swiper swiper">
                    <ul class="swiper-wrapper justify-items-stretch">

                        <ul class="swiper-wrapper justify-items-stretch">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'product_cat' => 'favorite', // Замените 'news' на слаг вашей категории
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) {
                                while ($loop->have_posts()):
                                    $loop->the_post();
                                    global $product;
                                    $product_id = get_the_ID();

                                    echo '<li class="relative swiper-slide new-slide card h-auto relative card product type-product post-46 status-publish first instock product_cat-new has-post-thumbnail shipping-taxable purchasable product-type-simple woocommerce">';
                                    echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';
                                    if (has_post_thumbnail($loop->post->ID)) {
                                        echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                    }
                                    echo '<span class="card__attr mb-5">250 мл</span>';
                                    echo '<h3 class="card__title">' . esc_html($loop->post->post_title) . '</h3>';
                                    echo '</a>';
                                    echo '<div class="flex flex-wrap items-center gap-5">';
                                    echo '<span class="card__price">' . wc_price($product->get_price()) . '</span>';
                                    echo '<div class="flex items-center gap-5 relative">';

                                    echo '<a href="?add-to-cart=' . $product_id . '" class="relative card__to-card button button product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1" data-product_id="' . $product_id . '" data-product_sku="' . $product->get_sku() . '" aria-label="' . __('Добавить в корзину', 'domain') . '" rel="nofollow">В корзину</a>';

                                    echo '<a href="#">';
                                    echo '<img src="' . get_template_directory_uri() . '/src/img/icons/icon-heart.svg"
                                    width="25" height="25" alt="добавить в избранное">';
                                    echo '</a>';
                                    // echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</li>';


                                endwhile;
                            } else {
                                echo __('Товаров не найдено');
                            }

                            wp_reset_postdata();
                            ?>
                        </ul>


                    </ul>
                </div>

                <div class="swiper-button-prev swiper-button-prev--favorite"></div>
                <div class="swiper-button-next swiper-button-next--favorite"></div>
            </div>

        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2 class="about__title">RA market —</h2>
            <p class="about__text">компания с заботой о каждом клиенте вот уже 20 лет. Мы умеем не только
                слушать, но и слышать вас.
                Это позволяет нам развиваться и улучшатся
                для вас. Мы делаем акцент на качестве наших продуктов. Каждый заказ наши сотрудники собирают
                вручную, тщательно отбирая продукты, чтобы они были отборными и спелыми</p>
            <a class="ra-button mb-10" href="">Узнать подробнее</a>

            <ul class="about__list">
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Только качественные
                        и натуральные продукты </p>
                </li>
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Наши поставщики —известные и проверенные бренды</p>
                </li>
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Каждый товар проходит тщательную проверку качества</p>
                </li>
            </ul>
        </div>
    </section>

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


<?php get_footer(); ?>