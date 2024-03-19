<?php
add_filter('woocommerce_my_account_my_orders_actions', 'true_order_again', 25, 2);

function true_order_again($actions, $order)
{
    // добавляет кнопку только для выполненных заказов
    if ($order->has_status('completed')) {

        $actions['order-again'] = array(
            'url' => wp_nonce_url(
                add_query_arg(
                    'order_again',
                    $order->get_id(),
                    wc_get_cart_url()
                ),
                'woocommerce-order_again'
            ),
            'name' => __('Order again', 'woocommerce'),
        );

    }
    return $actions;
}

add_action('woocommerce_thankyou', 'truemisha_complete_orders');


// автовыполнение заказа
function truemisha_complete_orders($order_id)
{
    if (!$order_id) {
        return;
    }

    $order = wc_get_order($order_id);
    $order->update_status('completed');
}


// Функция "повторить заказ" для вывода LI заказа на странице ЛК

// Получаем ID активного юзера 
$user_id = get_current_user_id();

// форматирование цены формата 123 000
function formatPrice($order_total)
{
    return number_format($order_total, 0, '.', ' ');
}

function show_user_order($user_id)
{

    if ($user_id) {
        $customer_orders = wc_get_orders(
            array(
                'customer' => $user_id,
                'status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'), // Укажите нужные статусы заказов
            )
        );




        if ($customer_orders) {
            foreach ($customer_orders as $order) {

                $order_id = $order->get_id();
                $order_total = $order->get_total();
                $formatted_price = formatPrice($order_total);
                $order_number = $order->get_order_number(); // получаем номер заказа
                $order_link = $order->get_view_order_url(); // ссылка на просмотр заказа
                $order_repeat_link = wc_get_endpoint_url('order-pay', $order_id, wc_get_page_permalink('checkout')); //ссылка на повторный заказ
                $order_date = $order->get_date_created(); // дата создания заказа
                $expected_delivery_date = date('j F', strtotime($order_date . '+ 6 days')); // ожидаемую дата доставки вручную
                $order_date_formatter = date('j F', strtotime($order_date)); // дата создания заказа отформатированная 
                $items_count = wc_get_order($order_id)->get_item_count(); // получает количество товаров в заказе

                // Перевод месяцев на русский язык
                $months = array(
                    'January' => 'января',
                    'February' => 'февраля',
                    'March' => 'марта',
                    'April' => 'апреля',
                    'May' => 'мая',
                    'June' => 'июня',
                    'July' => 'июля',
                    'August' => 'августа',
                    'September' => 'сентября',
                    'October' => 'октября',
                    'November' => 'ноября',
                    'December' => 'декабря',
                );

                // русификация месяца
                $expected_delivery_date = str_replace(array_keys($months), array_values($months), $expected_delivery_date);
                // русификация месяца для даты заказа
                $date_final = str_replace(array_keys($months), array_values($months), $order_date_formatter);

                echo '<li class="lk-order-item">';
                echo '    <div class="flex justify-between mb-5">';
                echo '        <div>';
                echo "           <span class='font-medium block'>Заказ №{$order_number}</span>";
                echo "            <span class='text-lg font-bold'>{$date_final}</span>";
                echo '        </div>';
                echo "       <span class='text-xl font-bold'>{$formatted_price} &#x20bd</span>";
                echo '    </div>';
                echo "   <p class='text-dark-gray mb-5'> {$items_count} товаров (0,7 кг)</p>";
                echo '    <div class="flex flex-wrap gap-5 items-center justify-between">';
                echo '       <ul class="flex gap-3">';

                // foreach ($order->get_items() as $item_id => $item) {
                foreach ($order->get_items() as $item_id => $item) {
                    $product = $item->get_product();
                    $product_image = $product->get_image();

                    echo '<li class="lk-product-item">';
                    echo "{$product_image}";
                    echo '</li>';
                }

                echo '         </ul>';
                echo "       <a href='{$order_link}' class='lk-order-item-button'>";
                echo '       <span>Повторить</span>';
                echo '         <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.60654 2.22266C11.2793 2.91714 13.249 5.3026 13.249 8.13859C13.249 11.5187 10.451 14.2588 6.99952 14.2588C3.54801 14.2588 0.75 11.5187 0.75 8.13859C0.75 5.3026 2.71972 2.91714 5.3925 2.22266"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M4.43945 1.44922L5.86995 2.21005L5.10912 3.64055" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>';
                echo ' </a>';

                echo ' </div>';
                echo ' </li>';
            }
        } else {
            echo "У вас нет заказов.";
        }
    } else {
        // тут поменять адрес страницы 
        echo '<p class="auth-wrapper">Вы должны быть <a href="http://manicur/?page_id=48"><span>авторизованны</span></a></p>';
    }
}

?>