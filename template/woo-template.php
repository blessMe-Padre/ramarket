<?php
/*
Template Name: страница шаблон - WooCommerce
*/
get_header();
?>
<div class="container">
    <h1>
        <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>

</div>
<?php get_footer(); ?>