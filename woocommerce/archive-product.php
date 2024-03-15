<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
?>
<?php

do_action('woocommerce_before_main_content');
?>



<header class="woocommerce-products-header">
	<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
		<h1 class="catalog-title">
			<?php woocommerce_page_title(); ?>
		</h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>


<?php
if (woocommerce_product_loop()) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */

	?>
	<div class="3333333333333333">
		<?php
		do_action('woocommerce_before_shop_loop');
		?>
	</div>
	<?php
	?>
	<div class="catalog py-10 relative">
		<div class="left">
			<button class="filter-button">
				<span>Фильтр</span>
			</button>
			<ul class="side-menu">
				<li>
					<a class="" href="#">Категории</a>
					<ul>
						<li>Молоко и сливки</li>
						<li>Сыры</li>
						<li>Масло</li>
						<li>Творог и сметана</li>
						<li>Кисломолочные</li>
						<li>Йогурты и сырки</li>
					</ul>
				</li>
				<li>
					<a class="" href="#">Фильтр</a>
					<ul>
						<li>Эко</li>
						<li>Органика</li>
						<li>Диетическое</li>
						<li>Творог и сметана</li>
						<li>Без лактозы</li>
					</ul>
				</li>

				<li>Творог и сметана</li>
				<li>Без лактозы</li>
			</ul>
		</div>

		<div class="right">
			<?php
			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}
?>
	</div>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
