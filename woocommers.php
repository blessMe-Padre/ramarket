<?php
// инициализация woocommerce
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}

// удаляет сайдбар со страниц
add_action('wp', 'bbloomer_remove_sidebar_product_pages');

function bbloomer_remove_sidebar_product_pages()
{

    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_tax()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_shop()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

// Подключение функций мини корзины
if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers-functions/minicard.php');
}

// Подключение функций "ЗАКАЗЫ" корзины
if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers-functions/order.php');
}

// Подключение функций "отображение избранных товаров" корзины
if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers-functions/get-favorite.php');
}

// add_filter('woocommerce_default_address_fields', 'custom_override_default_address_fields', 9999);

// function custom_override_default_address_fields($address_fields)
// {
//     $address_fields['country']['required'] = false;
//     $address_fields['first_name']['required'] = false;
//     $address_fields['last_name']['required'] = false;
//     $address_fields['address_1']['required'] = false;
//     $address_fields['address_2']['required'] = false;
//     $address_fields['city']['required'] = false;
//     $address_fields['state']['required'] = false;
//     $address_fields['postcode']['required'] = false;

//     return $address_fields;
// }

// отключает вывод заголовка на странице карточки товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
// add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 15 );

// add_action('woocommerce_single_product_summary', 'add_some_text', 5);
// function add_some_text()
// {
//     echo '222222222222222222222';
// }
?>