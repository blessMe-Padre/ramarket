<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
$product_title = $product->get_title();

$short_description = $product->get_short_description();// получает короткое описание товара
$attr = $product->get_attributes(); // Получаем весь массив с атрибутами товаров

$array = array(); // Создаем пустой массив
foreach ($attr as $key => $value) {
	$array[$key] = (($value->get_terms())[0]);
}

// обращаемся по ключу к каждому атрибуту
$country = $array['pa_strana']->name;
$proizvoditel = $array['pa_proizvoditel-1']->name;
$kkal = $array['pa_kalorijnost-kkal']->name;
$zhiry = $array['pa_zhiry-g']->name;
$upakovka = $array['pa_vid-upakovki']->name;
$obem = $array['pa_obem-1']->name;
$sostav = $array['pa_sostav']->name;
$primechanie = $array['pa_primechanie-1']->name;

// echo '<pre>';
// print_r($array);
// echo '</pre>';

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<h1 class="title">
		<?php echo $product_title ?>
	</h1>
	<div class="single-product__wrapper">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_before_single_product_summary');
		?>

		<div class="summary entry-summary">
			<div class="entry-summary-wrapper">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action('woocommerce_single_product_summary');
				?>
			</div>
		</div>

		<div class="single-product__description">
			<div class="mb-7">

				<?php if (isset($array['pa_bez-glyutena'])) {
					$bezglyutena = $array['pa_bez-glyutena']->name;
					echo '<span class="text-xs text-white font-medium py-2 px-5 rounded-3xl bg-yellow">';
					echo $bezglyutena;
					echo '</span>';
				}
				?>

				<?php if (isset($array['pa_vegan'])) {
					$vegan = $array['pa_vegan']->name;
					echo '<span class="text-xs text-white font-medium py-2 px-5 rounded-3xl bg-light-green">';
					echo $vegan;
					echo '</span>';
				}
				?>
			</div>

			<p class="text-xl font-bold mb-5">Пищевая ценность:</p>
			<?php
			echo "<p class='text-lg'>Жиры: {$zhiry}, Белки: 0 г,</p>";
			?>
			<p class="text-lg mb-5">Калорийность:
				<?php echo $kkal; ?> ккал
			</p>

			<p class="text-xl font-bold mb-5">Характеристики:</p>

			<ul class="single-product__list">
				<li>
					<p class="font-medium">Страна</p>
					<p>
						<?php echo $country; ?>
					</p>
				</li>
				<li>
					<p class="font-medium">Производитель</p>
					<p>
						<?php echo $proizvoditel; ?>
					</p>
				</li>
				<li>
					<p class="font-medium">Объем</p>
					<p>
						<?php echo $obem; ?>
					</p>
				</li>
				<li>
					<p class="font-medium">Вид упаковки</p>
					<p>
						<?php echo $upakovka; ?>
					</p>
				</li>
				<li>
					<p class="font-medium">Примечание</p>
					<p>
						<?php echo $primechanie; ?>
					</p>
				</li>

				<li>
					<p class="font-medium">Состав</p>
					<p>
						<?php echo $sostav; ?>
					</p>
				</li>
			</ul>
		</div>

	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>

</div>

<?php do_action('woocommerce_after_single_product'); ?>