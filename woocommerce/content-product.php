<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('relative card', $product); ?>>
<?php
$attr = $product->get_attributes(); // Получаем весь массив с атрибутами товаров

$array = array(); // Создаем пустой массив

foreach ($attr as $key => $value) {
	$array[$key] = (($value->get_terms())[0]);
}

echo '<div class="product-sticker-wrapper">';
if (isset($array['pa_bez-glyutena'])) {
	$bezglyutena = $array['pa_bez-glyutena']->name;
	echo '<span class="product-sticker bg-yellow">';
	echo $bezglyutena;
	echo '</span>';
}

if (isset($array['pa_vegan'])) {
	$vegan = $array['pa_vegan']->name;
	echo '<span class="product-sticker bg-light-green">';
	echo $vegan;
	echo '</span>';
}
echo '</div>';
?>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action('woocommerce_before_shop_loop_item');

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action('woocommerce_before_shop_loop_item_title');

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action('woocommerce_shop_loop_item_title');




	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	?>
	<div class="flex flex-wrap items-center gap-4">
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action('woocommerce_after_shop_loop_item_title');
		do_action('woocommerce_after_shop_loop_item');
		echo '<div class="heart-img-wrapper heart-img-wrapper--list">';
		echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]");
		echo '</div>';
		?>
	</div>
</li>