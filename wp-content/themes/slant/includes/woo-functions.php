<?php 

register_sidebar( // widget för produktkategori-meny
    array(
    'id' => 'productcategories',
    'name' => 'Produktkategorier'
    )
);

/* add_action('init', 'print_category_menu');

function print_category_menu() {
    add_action('woocommerce_before_main_content', 'printNavMenu');
} */

add_action('woocommerce_before_main_content', 'printNavMenu');

function printNavMenu() {
    dynamic_sidebar('productcategories');
}

?>