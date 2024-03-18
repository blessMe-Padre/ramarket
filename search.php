<?php
get_header();
?>
<main>
    <div class="container">
        <section class="main py-20">
            <h1 class="title">Результаты поиска для:
                <span style="color: green;">
                    <?php echo get_search_query(); ?>
                </span>
            </h1>
            <?php if (have_posts()): ?>
                <ul class="catalog__list">
                    <?php while (have_posts()):
                        the_post(); ?>
                        <?php
                        // Получаем объект продукта
                        global $product;

                        wc_get_template_part('content', 'product');
                        // Ваш обычный код для вывода постов, если это не продукт
                        ?>
                    <?php endwhile; ?>

                </ul>
            <?php else: ?>
                <div>
                    <p class="title">К сожалению, мы не нашли товары по вашему запросу</p>
                    <p>Похоже, мы не можем найти нужный вам товар,
                        но у нас есть много интересных предложений для вас</p>
                </div>

            <?php endif; ?>
        </section>

        <section class="py-20">
            <h2 class="title">Любимые товары покупателей</h2>
            <?php echo do_shortcode('[products limit="4" columns="4"]'); ?>
        </section>
    </div>
</main>
<?php
get_footer();
?>