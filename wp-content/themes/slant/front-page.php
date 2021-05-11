<?php
get_header(); /* hämtar header */
?>

<div class="container" style="width: 100%">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
        <?php
        $beställning = ['post_type' => 'kampanj']; //"beställning" på posttype
        $kampanjPoster = new WP_Query($beställning); //metod

        ?>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="max-height: auto;">

         <?php $varvRäknare = 0; ?>
        <?php while ($kampanjPoster->have_posts()) { //startar loopen för postType
            $kampanjPoster->the_post();

        ?> 
            <div class="item <?php 
            if($varvRäknare === 0)
            {echo 'active';} 
            ?>">
                <!-- hämtar kampanjlänk och kampanjbild -->
                <a href= ' <?php echo get_field('kampanjlank') ?> '><img src="<?php the_post_thumbnail_url(); ?>" alt="kampanjBilder" style="width:100%;"></a>              
       
            </div>

            <?php

            $varvRäknare = $varvRäknare + 1;
        } //avslutar loopen

        ?>
    
        </div>

        <!-- vänster och höger pilar -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- widget för bloggpuffen -->
<div id="bloggpuff"><?php dynamic_sidebar('bloggpuff')?></div>


<?php while (have_posts()) { //startar loopen för content i inlägget
            the_post();?>

<h1><?php the_title(); ?></h1>
<div><?php the_content();?></div>


<?php
} //avslutar loopen
?>
</div>


<?php
get_footer(); /* hämtar footer */
?>
