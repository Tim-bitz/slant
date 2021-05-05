<?php get_header(); ?>

<main>
    <div id="blog">
        <div class="bloggTitleDiv">
            <h1><?php wp_title(); ?></h1>
        </div>
        <section>

            <div class="postContainer">

                <div class="singlePost">
                    <article>
                        <?php while (have_posts()) { //startar loopen
                            the_post();
                        ?>

                            <img src="<?php
                                        the_post_thumbnail_url(); ?>" />
                            <h2 class="title">
                                <a href=""><?php the_title(); ?></a> <!-- hämtar titeln -->
                            </h2>

                            <ul class="meta">
                                <li>Datum:</li>
                                <li><a href=""><?php the_date(); ?></a></li> <!-- hämtar datum -->
                                <li>Författare:</li>
                                <li><a href=""><?php the_author(); ?></a></li> <!-- hämtar författaren -->
                                <li>Kategori:</li>
                                <li><a href=""><?php the_category('<a>, '); ?></a></li> <!-- hämtar kategorin -->
                            </ul>
                            <p><?php the_content(); ?></p> <!-- hämtar texten i inlägget -->
                            <hr id="line">
                            </hr>
                        <?php

                        } //avslutar loopen

                        ?>

                    </article>

                </div>
            </div>
    </div>
</main>

<?php get_footer(); ?>