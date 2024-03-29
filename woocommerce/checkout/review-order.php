<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;

$totals = WC()->cart->get_totals();
$discount_percent = round(((int) $totals['discount_total'] * 100) / (int) $totals['subtotal']);
?>
<table class="shop_table woocommerce-checkout-review-order-table">
	<tbody>
		<?php if($discount_percent > 0){ ?>
		<tr>	
			<th>Скидка по промокоду:</th>
			<td>
				<span class="percent"><?php echo $discount_percent; ?>%</span>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<th>Товары</th>
			<td>
				<span class="total"><?php echo number_format((int) $totals['cart_contents_total'], 0, '.', '&nbsp;') .'&nbsp;'. get_woocommerce_currency_symbol(); ?></span>
				<?php if(!empty(WC()->cart->get_coupons())){ ?>
				<span class="subtotal"><?php echo number_format((int) $totals['subtotal'], 0, '.', '&nbsp;') .'&nbsp;'. get_woocommerce_currency_symbol(); ?></span>
				<?php } ?>
				<span class="product_count"><?php echo count(WC()->cart->get_cart()); ?> шт</span>
			</td>
		</tr>
		<?php if($totals['shipping_total'] != 0){ ?>
		<tr>
			<th>Доставка</th>
			<td>
				<span><?php echo number_format((int) $totals['shipping_total'], 0, '.', '&nbsp;') .'&nbsp;'. get_woocommerce_currency_symbol(); ?></span>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">
			<?php
			foreach($checkout->get_checkout_fields('billing') as $key => $field)
			{
				woocommerce_form_field($key, $field, $checkout->get_value($key));
			}
			?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="send_chekout">
					<div class="totals">
						<span class="total_text">Итого:</span>
						<span class="total_all"><?php echo number_format((int) $totals['total'], 0, '.', '&nbsp;') .'&nbsp;'. get_woocommerce_currency_symbol(); ?></span>
					</div>
				
					<?php
						$order_button_text = apply_filters('woocommerce_pay_order_button_text', __('Оформить заказ', 'woocommerce'));
						echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt'. esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' .wc_wp_theme_get_element_class_name('button') : '' ) .'" name="woocommerce_checkout_place_order" id="place_order" value="'. esc_attr($order_button_text) .'" data-value="'. esc_attr($order_button_text) .'">'. esc_html($order_button_text) .'</button>');
						wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' );
					?>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="pre_order">Нажимая кнопку "Оформить заказ", даю согласие на обработку персональных данных</span>
			</td>
		</tr>
	</tfoot>
</table>

<?php 
//  ????
foreach (WC()->cart->get_fees() as $fee): ?>
		<tr class="fee">
			<th><?php echo esc_html($fee->name); ?></th>
			<td><?php wc_cart_totals_fee_html($fee); ?></td>
		</tr>
<?php endforeach;
//  [????]
?>

<?php 
//  ????
if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()): ?>
		<?php if ('itemized' === get_option('woocommerce_tax_total_display')): ?>
				<?php foreach (WC()->cart->get_tax_totals() as $code => $tax): // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited  ?>
						<tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
							<th><?php echo esc_html($tax->label); ?></th>
							<td><?php echo wp_kses_post($tax->formatted_amount); ?></td>
						</tr>
				<?php endforeach; ?>
		<?php else: ?>
				<tr class="tax-total">
					<th><?php echo esc_html(WC()->countries->tax_or_vat()); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
		<?php endif; ?>
<?php 
//  [????]
endif; ?>
