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

                        $count = $category->count;

                        ?>

                    <a href="<?php echo esc_url($category_link); ?>" class="swiper-slide category-slide recommendation-slide relative">
                        <p><?php echo esc_html($category_name); ?></p>
                        <span><?php echo $count; ?> товаров</span>
                        <!-- <img src="<?php echo esc_url($image_url); ?>" alt="img"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/catalog/all-images-2.png" alt="">
                    </a>
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev--recommendation"></div>
                <div class="swiper-button-next swiper-button-next--recommendation"></div>
            </div>
        </section>

        <section class="all-category py-10 md:py-20">
            <h2 class="title">Категории товаров</h2>
            <ul class="catalog-menu catalog-menu--all-category">
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

        </section>
    </main>
</div>

<?php get_footer(); ?>