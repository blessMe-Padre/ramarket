<footer class="footer py-12">
    <h2 class="visually-hidden">Контакты</h2>
    <div class="container">
        <div class="footer__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" width="195" height="55" alt="лого">

            <div class="flex flex-col">
                <h3>Клиентам</h3>
                    <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => 'footer__list',
                        'menu_id' => ''
                    ]);
                    ?>
            </div>

            <div>
                <h3>Каталог</h3>
                    <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => '',
                        'menu_class' => 'footer__list-columns',
                        'menu_id' => ''
                    ]);
                    ?>
            </div>

            <div>
                <h3>Контакты</h3>
                <div class="flex items-center gap-5 mb-3">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-pin.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <p>г. Владивосток, <br>
                        ул. ​Проспект Острякова, д. 13</p>
                </div>
                <div class="flex items-center gap-5 mb-3">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-phone.svg" width="20"
                            height="20" alt="pin">
                    </div>
                    <a class="footer-link" href="tel:+79084405742">+ 7 (908) 440-57-42</a>
                </div>
                <div class="flex items-center gap-5 mb-3">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-whatsapp.svg"
                            width="20" height="20" alt="pin">
                    </div>
                    <a href="#popup" class="ra-button popup-link">Заказать звонок</a>
                </div>
            </div>

        </div>
    </div>
</footer>
</div>
<!-- <div class="scroll-top">
    <img src="<?php echo get_template_directory_uri(); ?>/src/img/up-arrow.svg" alt="стрелка вверх">
</div> -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/baguettebox.js"></script>
<script type="module" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>