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
    wp_enqueue_style('style', get_stylesheet_uri(), '', '0.0.4');

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

// Замена текста 
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated)
{
    $translated = str_ireplace('Подытог', 'Сумма', $translated);
    return $translated;
}

function add_custom_field($type)
{
    $user = wp_get_current_user();

    $field = '<form class="form-lk" action="#" method="post">';
    $field .= '<div class="form-lk__field">';
    switch ($type) {
        case 'user_name':
            $input_value = esc_attr($user->first_name);
            break;
        case 'user_email':
            $input_type = 'email';
            $input_value = $user->user_email;
            break;
        case 'user_birth':
            $input_type = 'date';
            $input_value = $user->birth;
            $styles = 'padding-right: 76px;';
            break;
        case 'user_pass':
            $input_type = 'password';
            break;
        case 'user_address':
            $input_value = esc_attr($user->billing_address_1);
            break;
        case 'user_phone':
            $input_type = 'tel';
            $input_value = esc_attr($user->billing_phone);
            break;
    }

    $field .= '<input id="' . $type . '" class="input_field" type="' . (isset ($input_type) ? $input_type : 'text') . '" name="' . $type . '" value="' . (isset ($input_value) ? $input_value : '') . '" disabled' . (isset ($styles) ? ' style="' . $styles . '"' : '') . ' />';
    $field .= wp_nonce_field('save_account_details_access');
    $field .= '<div class="edit"></div>';
    //$field  .=          '<div class="submit hidden"></div>';
    $field .= '<button type="submit" name="save_account_details" class="submit hidden"></button>';
    $field .= '<div class="cancel hidden"></div>';
    $field .= '</div>';
    $field .= '</form>';

    return $field;
}

add_action('init', 'handle_custom_name_fields_form_submission');
function handle_custom_name_fields_form_submission()
{
    if (isset ($_POST['save_account_details']) && wp_verify_nonce($_POST['_wpnonce'], 'save_account_details_access')) {
        $customer_id = get_current_user_id();

        if (isset ($_POST['user_name'])) {
            update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['user_name']));
        } elseif (isset ($_POST['user_email'])) {
            $email = sanitize_email($_POST['user_email']);
            if (is_email($email)) {
                wp_update_user(
                    array(
                        'ID' => $customer_id,
                        'user_email' => $email
                    )
                );
            } else {
                print_r("Введите корректный адрес почты");
            }
        } elseif (isset ($_POST['user_birth'])) {
            update_user_meta($customer_id, 'birth', sanitize_text_field($_POST['user_birth']));
        } elseif (isset ($_POST['user_phone'])) {
            update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['user_phone']));
        }
        //elseif(isset($_POST['user_pass']))
        //{
        //
        //}
        elseif (isset ($_POST['user_address'])) {
            update_user_meta($customer_id, 'billing_address_1', sanitize_text_field($_POST['user_address']));
        }
    }
}

?>