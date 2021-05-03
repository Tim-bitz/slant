<?php
//lägger till menyer i admin
add_theme_support('woocommerce');
add_theme_support('post-thumbnail');
add_theme_support('menus');
add_theme_support('widgets');

//placering av menyer
add_action('after_setup_theme', 'register_menu');

function register_menu() {
    register_nav_menu('Footermeny', 'Meny placed in footer');
}

//widget för footer
register_sidebar(
    [
        'name' => 'Footer left',
        'description'=> 'Info till vänster i footern',
        'id' => 'footerLeft',
        'before_widget' => ''
    ]
);

register_sidebar(
    [
        'name' => 'Footer middle',
        'description'=> 'Info centrerat i footern',
        'id' => 'footerCenter',
        'before_widget' => ''
    ]
);

register_sidebar(
    [
        'name' => 'Footer right',
        'description'=> 'Info till höger i footern',
        'id' => 'footerRight',
        'before_widget' => ''
    ]
);