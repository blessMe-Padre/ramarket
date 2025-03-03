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

global $product;
$short_description = $product->get_short_description() ? $product->get_short_description() : 'не указанно';// получает короткое описание товара
$attr = $product->get_attributes(); // Получаем весь массив с атрибутами товаров

$array = array(); // Создаем пустой массив
foreach ($attr as $key => $value) {
	$array[$key] = (($value->get_terms())[0]);
}

// обращаемся по ключу к каждому атрибуту
$sostav = isset($array['pa_sostav']) ? $array['pa_sostav']->name : "не указанно";
$uslovia = isset($array['pa_usloviya-i-srok-hraneniya']) ? $array['pa_usloviya-i-srok-hraneniya']->name : "не указанно";
// $sostav = $array['pa_sostav']->name;
// $uslovia = $array['pa_usloviya-i-srok-hraneniya']->name;


if (!empty($product_tabs)): ?>

								<div class="woocommerce-tabs wc-tabs-wrapper">
									<ul class="tabs wc-tabs" role="tablist">
										<?php foreach ($product_tabs as $key => $product_tab): ?>
																		<li class="<?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab"
																			aria-controls="tab-<?php echo esc_attr($key); ?>">
																			<a href="#tab-<?php echo esc_attr($key); ?>">
																				<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
																			</a>
																		</li>
										<?php endforeach; ?>
									</ul>
									<?php foreach ($product_tabs as $key => $product_tab): ?>
																	<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab"
																		id="tab-<?php echo esc_attr($key); ?>" role="tabpanel"
																		aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
																		<?php
																		if (isset($product_tab['callback'])) {
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
										<p>
											<?php echo $short_description; ?>
										</p>
									</div>
									<div class="_tabs-block" id="tab2">
										<p>
											<?php echo $sostav; ?>
										</p>
									</div>
									<div class="_tabs-block" id="tab3">
										<p>
											<?php echo $uslovia; ?>
										</p>
										</p>
									</div>
								</div>
<?php endif; ?>