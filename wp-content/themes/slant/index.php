<?php

get_header();

if (have_posts() ) {
    while ( have_posts() ) {

        the_post();
    
        echo '<h3>';
        the_title();
        echo '</h3>';

        echo '<p>';
        the_content();
        echo '</p>';
    }
} else {
    echo 'Denna sidan är tom.';
}

get_footer();

?>