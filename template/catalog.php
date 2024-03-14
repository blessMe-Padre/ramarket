<?php
/*
Template Name: страница шаблон - Каталог 
*/
get_header();
?>

<div class="container">
    <main>
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span>&bull;</span>
            <span>Каталог</span>
        </div>

        <section class="recommendation relative py-10 md:py-20">
            <h2 class="title">Рекомендуем</h2>

            <div class="w-0 min-w-[100%] relative">
                <div class="recommendation-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide category-slide recommendation-slide relative">
                            <p>Новинки</p>
                            <span>148 товаров</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/all-images-1.png"
                                alt="">
                        </div>
                        <div class="swiper-slide category-slide recommendation-slide relative">
                            <p>Популярные товары</p>
                            <span>234 товара</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/all-images-2.png"
                                alt="">
                        </div>
                        <div class="swiper-slide category-slide recommendation-slide relative">
                            <p>Диетические продукты</p>
                            <span>48 товаров</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/all-images-3.png"
                                alt="">
                        </div>
                        <div class="swiper-slide category-slide recommendation-slide relative">
                            <p>Диетические продукты</p>
                            <span>48 товаров</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/all-images-3.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev--recommendation"></div>
                <div class="swiper-button-next swiper-button-next--recommendation"></div>
            </div>
        </section>

        <section class="all-category py-10 md:py-20">
            <h2 class="title">Категории товаров</h2>
            <ul class="all-category__list">
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
                <li class="relative category-item">
                    <a href="">
                        <p>Овощи</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-1.png" alt="">
                    </a>
                </li>
            </ul>

        </section>
    </main>
</div>

<?php get_footer(); ?>