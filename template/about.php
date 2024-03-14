<?php
/*
Template Name: страница шаблон - О нас
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Территория натуральных продуктов / О нас</h1>

    <section class="about">
        <div class="container">
            <h2 class="about__title md:text-7xl sm:text-4xl">RA market —</h2>
            <p class="about__text md:text-2xl sm:text-xl font-normal">компания с заботой о каждом клиенте вот
                уже 20 лет. Мы умеем не только
                слушать, но и слышать вас.
                Это позволяет нам развиваться и улучшатся
                для вас. Мы делаем акцент на качестве наших продуктов. Каждый заказ наши сотрудники собирают
                вручную, тщательно отбирая продукты, чтобы они были отборными и спелыми</p>
            <a class="ra-button mb-10" href="">Узнать подробнее</a>

            <ul class="about__list">
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Только качественные
                        и натуральные продукты </p>
                </li>
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Наши поставщики —известные и проверенные бренды</p>
                </li>
                <li class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-check.svg" width="60"
                        height="60" alt="check">
                    <p>Каждый товар проходит тщательную проверку качества</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="about__company pt-10 relative z-10">
        <img class="absolute top-0 left-0 w-5/12 -z-10"
            src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/pattern.png" alt="">
        <div class="container">
            <h3 class="font-medium pb-5 md:text-4xl sm:text-3xl text-black">О нас</h3>
            <div class="flex flex-wrap justify-between">
                <div class="flex flex-col gap-8 sm:w-full md:w-3/6">
                    <p class="md:text-2xl sm:text-lg font-normal text-black text-wrap">
                        RA market — это рай для всех гурманов и ценителей натуральности. Наша компания была
                        основана с целью предоставления высококачественных и экологически чистых продуктов
                        питания для тех, кто заботится о своем здоровье и благополучии. В нашем магазине мы
                        предлагаем широкий ассортимент товаров, начиная от свежих фруктов и овощей, заканчивая
                        органическими крупами, специями и натуральными суперфудами.
                    </p>

                    <p class="md:text-2xl sm:text-lg font-normal text-black text-wrap">
                        Мы стремимся предоставлять продукты самого высокого качества, которые не содержат ГМО,
                        пестицидов, искусственных красителей и ароматизаторов. Все наши товары проходят строгий
                        контроль качества и соответствуют всем международным стандартам. Мы также следим за
                        последними тенденциями в области здорового питания и постоянно обновляем наш ассортимент
                        новинками, которые помогут вам поддерживать свое здоровье и благополучие на высоком
                        уровне.
                    </p>

                    <p class="md:text-2xl sm:text-lg font-normal text-black text-wrap">
                        Компания RA market гордится своей командой профессионалов, которая всегда готова помочь
                        вам с выбором продуктов, предоставить информацию о составе и особенностях каждого
                        товара, а также дать советы по здоровому питанию. Мы стремимся сделать процесс покупки
                        максимально удобным и приятным для наших клиентов.
                    </p>

                    <p class="md:text-2xl sm:text-lg font-normal text-black text-wrap">
                        Нашей главной миссией является обеспечение доступа к натуральным и здоровым продуктам
                        питания для всех людей, независимо от их возраста, образа жизни и финансовых
                        возможностей.
                    </p>
                </div>

                <div class="w-full md:w-4/12">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/shop.png"
                        alt="Фото магазина">
                </div>

            </div>

            <h3 class="font-medium pb-5 md:text-4xl sm:text-3xl text-black pt-8">Фото из магазина</h3>

            <div class="w-0 min-w-[100%] relative">
                <div class="about__shop-swiper swiper">
                    <div class="swiper-wrapper gallery-wrapper">
                        <div class="swiper-slide about__shop-slide">
                            <div class="relative">
                                <a
                                    href="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_2.png">
                                    <img class="rounded-2xl object-cover"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_2.png"
                                        alt="фото-2" data-caption="Image caption">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide about__shop-slide">
                            <div class="relative">
                                <a
                                    href="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_3.png">
                                    <img class="rounded-2xl object-cover"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_3.png"
                                        alt="фото-3" data-caption="Image caption">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide about__shop-slide">
                            <div class="relative">
                                <a
                                    href="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_1.png">
                                    <img class="rounded-2xl object-cover"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_1.png"
                                        alt="фото-1" data-caption="Image caption">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide about__shop-slide">
                            <div class="relative">
                                <a
                                    href="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_4.png">
                                    <img class="rounded-2xl object-cover"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_shop_4.png"
                                        alt="фото-4" data-caption="Image caption">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev--about__shop"></div>
                <div class="swiper-button-next swiper-button-next--about__shop"></div>
            </div>
        </div>
    </section>

    <section class="about__company__reviews">
        <div class="container">
            <h3 class="font-medium pb-5 md:text-4xl sm:text-3xl text-black pt-8">Что о нас говорят клиенты</h3>
            <div class="w-0 min-w-[100%] relative">
                <div class="about__shop__reviews-swiper swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide about__shop__reviews-slide">
                            <div class="relative p-8 bg-light-gray rounded-xl">

                                <div class="flex justify-between items-center">
                                    <div class="flex justify-center gap-5 items-center">
                                        <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                                        <p class="text-black md:text-xl font-medium">Екатерина</p>
                                    </div>

                                    <div class="flex justify-center gap-2">
                                        <span class="font-medium text-black md:text-xl text-base">5.0</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                            alt="star">
                                    </div>
                                </div>

                                <div class="pt-3">
                                    <p class="text-black font-medium md:text-lg text-base">
                                        Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                                        овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                                        Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                                        общем, я там постоянный клиент и всем рекомендую!
                                    </p>
                                </div>

                                <div class="flex justify-start gap-3 py-3">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                                        alt="отзыв_1">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                                        alt="отзыв_2">
                                </div>


                                <div class="py-2">
                                    <span class="text-gray text-sm font-normal">
                                        26.02.2021
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide about__shop__reviews-slide">
                            <div class="relative p-8 bg-light-gray rounded-xl">

                                <div class="flex justify-between items-center">
                                    <div class="flex justify-center gap-5 items-center">
                                        <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                                        <p class="text-black md:text-xl font-medium">Екатерина</p>
                                    </div>

                                    <div class="flex justify-center gap-2">
                                        <span class="font-medium text-black md:text-xl text-base">5.0</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                            alt="star">
                                    </div>
                                </div>

                                <div class="pt-3">
                                    <p class="text-black font-medium md:text-lg text-base">
                                        Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                                        овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                                        Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                                        общем, я там постоянный клиент и всем рекомендую!
                                    </p>
                                </div>

                                <div class="flex justify-start gap-3 py-3">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                                        alt="отзыв_1">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                                        alt="отзыв_2">
                                </div>


                                <div class="py-2">
                                    <span class="text-gray text-sm font-normal">
                                        26.02.2021
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide about__shop__reviews-slide">
                            <div class="relative p-8 bg-light-gray rounded-xl">

                                <div class="flex justify-between items-center">
                                    <div class="flex justify-center gap-5 items-center">
                                        <p class="rounded-full bg-white text-light-green py-5 px-7">E</p>
                                        <p class="text-black md:text-xl font-medium">Екатерина</p>
                                    </div>

                                    <div class="flex justify-center gap-2">
                                        <span class="font-medium text-black md:text-xl text-base">5.0</span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/star.png"
                                            alt="star">
                                    </div>
                                </div>

                                <div class="pt-3">
                                    <p class="text-black font-medium md:text-lg text-base">
                                        Магазин хороший, всегда очень бойкая торговля. Интересные ЗОЖные товары,
                                        овощи, зелень всегда свежие, хоть и не дешёвые, но оно того стоит.
                                        Персонал очень вежливый и заботливый, всегда помогут и подскажут. В
                                        общем, я там постоянный клиент и всем рекомендую!
                                    </p>
                                </div>

                                <div class="flex justify-start gap-3 py-3">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_1.png"
                                        alt="отзыв_1">
                                    <img class="rounded-lg"
                                        src="<?php echo get_template_directory_uri(); ?>/src/img/about__shop/about_review_2.png"
                                        alt="отзыв_2">
                                </div>

                                <div class="py-2">
                                    <span class="text-gray text-sm font-normal">
                                        26.02.2021
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="swiper-button-prev swiper-button-prev--about__shop__reviews"></div>
                <div class="swiper-button-next swiper-button-next--about__shop__reviews"></div>
            </div>
        </div>
    </section>

    <section class="contact py-20">
        <div class="container">
            <h2 class="title">Мы во Владивостоке</h2>
            <div class="contact__header flex flex-wrap flex gap-8 mb-12">
                <div class="flex items-center gap-5 mb-3">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-pin.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <p>г. Владивосток,
                        ул. ​Проспект Острякова, д. 13</p>
                </div>
                <div class="flex items-center gap-5 mb-3">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-phone.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <a href="tel:+79084405742">+ 7 (908) 440-57-42</a>
                </div>

                <button class="ra-button">Заказать звонок</button>
            </div>

            <div class="contact__map rounded-3xl min-h-[600px] grid">
                <iframe class="rounded-3xl block"
                    src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=131.899555%2C43.133904&mode=search&oid=62912864346&ol=biz&z=19.11"
                    width="100%" height="100%" frameborder="1" allowfullscreen="true"
                    style="position:relative; height: 100%;"></iframe>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>