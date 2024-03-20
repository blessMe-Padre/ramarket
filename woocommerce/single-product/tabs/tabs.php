<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty ($product_tabs)): ?>

		<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ($product_tabs as $key => $product_tab): ?>
				<li class="<?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
					<a href="#tab-<?php echo esc_attr($key); ?>">
						<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
			<?php foreach ($product_tabs as $key => $product_tab): ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
				<?php
				if (isset ($product_tab['callback'])) {
					call_user_func($product_tab['callback'], $key, $product_tab);
				}
				?>
			</div>
			<?php endforeach; ?>

			<?php do_action('woocommerce_product_after_tabs'); ?>
		</div>
		<div class="_tabs">
			<nav class="single-product__nav">
				<button class="_tabs-item _active" data-tab="#tab1">О товаре</button> |
				<button class="_tabs-item" data-tab="#tab2">Состав</button> |
				<button class="_tabs-item" data-tab="#tab3">Условия хранения</button>
			</nav>

			<div class="_tabs-block _active" id="tab1">
				<p>Натуральный веганский майонез Мауопеиг с трюфелем -
					идеален для тех, кто ценит качество и заботится о своем организме. Приготовленный из
					натуральных ингредиентов,
					он не содержит глютена и вредных жиров. Это означает, что
					наш веганский манговый майонез - безопасный и полезный
					соус, который можно смело добавлять в свой рацион.</p>
			</div>
			<div class="_tabs-block" id="tab2">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptatum dignissimos
					placeat eaque illo est.</p>
			</div>
			<div class="_tabs-block" id="tab3">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni non voluptas fuga veritatis
					accusamus, deserunt iusto illum enim, velit fugit, quaerat numquam inventore. Dolor hic
					consequatur magni optio aut.</p>
			</div>
		</div>
<?php endif; ?>
