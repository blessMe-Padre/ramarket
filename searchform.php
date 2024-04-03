<form class="header__search" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
    <label class="screen-reader-text" hidden for="s">Поиск: </label>

    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск по товарам..." />

    <button class="search-button" type="submit" id="searchsubmit" value="найти">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/icon-search.svg" width="21" height="21"
            alt=""></button>
</form>