<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // подключаем файл animate.css
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');


    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', '0.0.2');

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // Подключаем основной main.js файл
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);

    // Подключаем japan файл
    wp_enqueue_script('swiper-bundle.min.js', get_template_directory_uri() . '/js/swiper-bundle.min.js');
}

function add_menu()
{
    register_nav_menu('top', 'главное меню сайта');
    register_nav_menu('lk', 'меню личный кабинет');
}


if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers.php');
}

// Функция замены текста в кнопках "Добавить в корзину"

add_filter('add_to_cart_text', 'woo_custom_product_add_to_cart_text');            // < 2.1
add_filter('woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text');  // 2.1 +

function woo_custom_product_add_to_cart_text()
{

    return __('В корзину', 'woocommerce');
}



?>