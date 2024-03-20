<?php

// Получаем ID активного юзера 
$user_id = get_current_user_id();

function show_favorite_product($user_id)
{

    if ($user_id) {
        $customer_orders = wc_get_orders(
            array(
                'customer' => $user_id,
                'status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'), // Укажите нужные статусы заказов
            )
        );

        foreach ($customer_orders as $order) {
            print_r($order);
        }
    }

    echo "<li class='relative new-slide card catalog__list-item'>";
    echo "<a href='#'>";
    echo "    <img class='card__img mb-5'
            src='<?php echo get_template_directory_uri(); ?>/src/img/catalog/image-4.png'
            width='148' height='203' alt='product'>";
    echo "    <span class='card__attr mb-5'>250 мл</span>";
    echo "    <h3 class='card__title'>MAYO Mayoner Майонез натуральный с трюфелем (веган,
            без гютена)</h3>";
    echo "</a>";
    echo "<div class='flex flex-wrap items-center gap-5'>";
    echo "<span class='card__price'>590 ₽</span>";
    echo " <div class='flex items-center gap-5'>";
    echo " <button class='card__to-card' href='#'>В корзину</button>";
    echo " <a href='#'>";
    echo "<img src='<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-heart.svg'
                    width='25' height='25' alt='добавить в избранное'>";
    echo "</a>";
    echo "</div>";
    echo "</div>";
    echo "</li>";
}

?>