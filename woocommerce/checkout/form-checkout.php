<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

	<?php if($checkout->get_checkout_fields()){ ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php
				//  Бокс "Способ доставки" (файл шаблона "woocommerce/cart/cart-shipping.php")
				if(WC()->cart->needs_shipping() && WC()->cart->show_shipping())
				{
					do_action('woocommerce_review_order_before_shipping');
					wc_cart_totals_shipping_html();
					do_action('woocommerce_review_order_after_shipping');
				}
				//  [Бокс "Способ доставки"]
				?>

				<?php
				//  Бокс "Доставка по другому адресу | Примечания к заказу" (файл шаблона "woocommerce/checkout/form-shipping.php")
				do_action('woocommerce_checkout_shipping');
				?>
				
				<h3 class="h3_order">Способы оплаты</h3>

				<ul class="pay">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/cash.svg" />
						<span>Наличными по факту получения заказа</span>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/fern_und_nach.svg" />
						<span>Перевод на мобильный банк Сбербанка</span>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/card.svg" />
						<span>По терминалу в магазине</span>
					</li>
				</ul>
			</div>

			<div class="col-2">
				<?php do_action('woocommerce_checkout_before_order_review'); ?>
				<?php
				//  Бокс "Инфо по заказу" (файл шаблона "woocommerce/checkout/review-order.php")
				//  Бокс "Оплата при доставке" (файл шаблона "woocommerce/checkout/payment.php")
				do_action('woocommerce_checkout_order_review');
				?>
				<?php do_action('woocommerce_checkout_after_order_review'); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php } ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
