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

register_sidebar(
    [
        'name' => 'kategori',
        'description'=> 'Kategori i sidebar, blogg',
        'id' => 'kategori',
        'before_widget' => ' '
    ]
);


register_sidebar( // widget för sökformulär
    array(
        'id' => 'customsearch',
        'name' => 'Sökformulär',
        'before_widget' => '<form id="searchform" class="searchform" action="'.get_bloginfo('wpurl').'">', //action gör att sökningar görs på hela siden isället för url'en man står på
        'after_widget' => '</form>',
        'before_title' => '<span class="hidden">',
        'after_title' => '</span>'
        )
);

register_nav_menus(
    array(
        'menu-header' => 'Header meny',
        'menu-header-two' => 'Header meny 2'
        )
);




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

