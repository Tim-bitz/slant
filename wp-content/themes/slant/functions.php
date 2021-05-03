<?php

// lägger till menyer i admin
add_theme_support('woocommerce');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


//widget för kategoridelen
register_sidebar(
    [
        'name' => 'bastakat',
        'description' => 'basta kategorien',
        'id' => 'bastakat',
        'before_widget' => ' ',
        'after_widget' => ' '
    ]
);