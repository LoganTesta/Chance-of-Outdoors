<?php

?>

<form id="searchForm" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search search-form">
    <div class="wp-block-search__inside-wrapper search-controls">
        <input class="wp-block-search__input" id="wp-block-search__input" placeholder="" value="<?php echo esc_attr( get_search_query() ); ?>" type="search" name="s" required="">
        <button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button>
    </div>
    <div class="input-container">
        <div class="search-form__search" id="searchFormSearch">
            <div class="fa-solid fa-magnifying-glass search-form__search-icon" id="searchFormSearchIcon" role="button" tabindex="0"></div>
            <div class="fa-solid fa-xmark search-form__close-search-icon" id="searchFormCloseSearchIcon" role="button" tabindex="0"></div>
        </div>
    </div>
</form>
