<?php 

register_sidebar( // widget för produktkategori-meny
    array(
    'id' => 'productcategories',
    'name' => 'Produktkategorier'
    )
);

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
add_action( 'woocommerce_after_shop_loop', 'custom_woocommerce_pagination', 10 );

function custom_woocommerce_pagination() {
    echo '<div id="pagination-div">';
    woocommerce_pagination();
    echo '</div>';
}

/* add_action('init', 'print_category_menu');

function print_category_menu() {
    add_action('woocommerce_before_main_content', 'printNavMenu');
} */

add_action('custom_before_main_content', 'printNavMenu');

function printNavMenu() {
    dynamic_sidebar('productcategories');
}


?>