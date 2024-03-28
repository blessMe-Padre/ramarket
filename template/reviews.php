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

            <?php //echo do_shortcode('[testimonial_view id="2"]'); ?>
            <?php echo show_reviews(); ?>
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

                    <h2 class="text-start text-main-black z-10 font-normal md:text-4xl text-xl pb-10">Оцените качество услуг</h2>

                    <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
                </div>
            </div>
        </section>
    </main>

</div>

<?php get_footer(); ?>