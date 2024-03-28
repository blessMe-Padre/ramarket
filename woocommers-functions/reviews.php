<?php
function show_reviews()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="reviews__list grid sx:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-7">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="relative bg-light-gray rounded-xl">';
        $review_box .= '<div class="flex justify-between items-center">';
        $review_box .= '<div class="flex justify-center gap-5 items-center">';
        $review_box .= '<p class="avatar rounded-full bg-white text-light-green">' . $short_name . '</p>';
        $review_box .= '<p class="text-black md:text-xl font-medium">' . $review_meta['client_name'][0] . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-center items-center gap-2">';
        $review_box .= '<span class="font-medium text-black md:text-xl text-base">' . $review_meta['rating'][0] . '</span>';
        $review_box .= '<span class="star_symbol"></span>';
        $review_box .= '</div>';
        $review_box .= '</div>';

        $review_box .= '<div class="text pt-3">';
        $review_box .= '<p class="text-black font-medium md:text-lg text-base">' . $review->post_content . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-start gap-3 py-3 gallery-wrapper">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '">';
        if (isset($review_meta['featured_image'])) {

            $review_box .= '<img class="rounded-lg" src="' . $review_meta['featured_image'][0] . '" alt="">';

        }
        $review_box .= '</a>';
        $review_box .= '</div>';

        $review_box .= '<div class="py-2">';
        $review_box .= '<span class="text-gray text-sm font-normal">' . date('d.m.Y', strtotime($review->post_date)) . '</span>';
        $review_box .= '</div>';
        $review_box .= '</li>';
    }

    $review_box .= '</ul>';

    return $review_box;
}

function show_reviews_one()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="swiper-wrapper justify-items-stretch">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);
        $reviews_rating = $review_meta['rating'][0];

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="relative bg-light-gray rounded-xl swiper-slide h-auto p-5">';
        $review_box .= '<div class="flex justify-between items-center">';
        $review_box .= '<div class="flex justify-center gap-5 items-center">';
        $review_box .= '<p class="avatar rounded-full bg-white text-light-green">' . $short_name . '</p>';
        $review_box .= '<p class="text-black md:text-xl font-medium">' . $review_meta['client_name'][0] . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-center items-center gap-2">';
        $review_box .= '<span class="font-medium text-black md:text-xl text-base">' . $reviews_rating . '</span>';
        $review_box .= '<span class="star_symbol"></span>';
        $review_box .= '</div>';
        $review_box .= '</div>';

        $review_box .= '<div class="text pt-3">';
        $review_box .= '<p class="text-black font-medium md:text-lg text-base">' . $review->post_content . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-start gap-3 py-3 gallery-wrapper">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '">';
        if (isset($review_meta['featured_image'])) {

            $review_box .= '<img class="rounded-lg" src="' . $review_meta['featured_image'][0] . '" alt="">';

        }
        $review_box .= '</a>';
        $review_box .= '</div>';

        $review_box .= '<div class="py-2">';
        $review_box .= '<span class="text-gray text-sm font-normal">' . date('d.m.Y', strtotime($review->post_date)) . '</span>';
        $review_box .= '</div>';
        $review_box .= '</li>';
    }

    $review_box .= '</ul>';

    return $review_box;
}

?>