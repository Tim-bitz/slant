<?php get_header(); ?> <!-- hämtar headern -->

    <div id="blog">
        <div class="bloggTitleDiv">
            <h1><?php wp_title(); ?></h1> <!-- hämtar titeln på sidan -->
        </div>
        <section>
                    <article>
                        <?php while (have_posts()) { //startar loopen
                            the_post();
                        ?>

                            <img src="<?php
                                        the_post_thumbnail_url(); ?>" /> <!-- hämtar bild från databas -->
                            <h2 class="title">
                                <a href="<?php the_permalink() //skriver ut postens permalänk 
                                            ?>"><?php the_title(); // skriver ut postens titel
                                                                                                    ?></a>
                            </h2>
                            <div class="meta">

                                <ul class="meta">
                                    <li>Datum:</li>
                                    <li><a href=""><?php the_date(); ?></a></li> <!-- hämtar datum -->
                                    <li>Författare:</li>
                                    <li><a href=""><?php the_author(); ?></a></li> <!-- hämtar författaren -->
                                    <li>Kategori:</li>
                                    <li><a href=""><?php the_category('<a>, '); ?></a></li> <!-- hämtar kategorin -->
                                </ul>

                                <p><?php the_content(); ?></p> <!-- hämtar texten i inlägget -->
                            </div>
                            <!-- <hr id="line">
                            </hr> -->
                        <?php

                        } //avslutar loopen

                        ?>

                    </article>
    </div>


<?php get_footer(); ?> <!-- hämtar footer -->