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

        ?>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2131.1327864174823!2d11.995688316439109!3d57.714202146489924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff47fcc6a3d53%3A0xde548ac09fc4a845!2sRedbergsv%C3%A4gen%207%2C%20416%2065%20G%C3%B6teborg!5e0!3m2!1sen!2sse!4v1620294776370!5m2!1sen!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        <?php
    }
} else {
    echo 'Denna sidan är tom.';
}

get_footer();

?>