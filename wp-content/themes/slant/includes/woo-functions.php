<?php 

register_sidebar( // widget för produktkategori-meny
    array(
    'id' => 'productcategories',
    'name' => 'Produktkategorier'
    )
);

add_action('woocommerce_before_main_content', 'printNavMenu');

function printNavMenu() {
    dynamic_sidebar('productcategories');
    echo 'banan';
}

?>