<?php
get_header();
?>

<div class="container" style="width: 100%">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <?php
        $beställning = ['post_type' => 'kampanj'];
        $kampanjPoster = new WP_Query($beställning);

        ?>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="max-height: 500px;">

         <?php $varvRäknare = 0; ?>
        <?php while ($kampanjPoster->have_posts()) { //startar loopen
            $kampanjPoster->the_post();

        ?> 
            <div class="item <?php 
            if($varvRäknare === 0)
            {echo 'active';} 
            
            ?>">

                <a href=""><img src="<?php the_post_thumbnail_url(); ?>" alt="kampanjBilder" style="width:100%;"></a>
            </div>

            <?php
            $varvRäknare = $varvRäknare + 1;
        } //avslutar loopen

        ?>
    
        </div>
        <!-- end wrapper -->
       
        <!-- loop start -->

       

        
        <!-- end loop -->

        <!-- Left and right controls -->
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
<!-- <div id="imgDiv"><img id="imgMain" src="./assets/img/flowers.png"></div> -->

<h1><?php the_title(); ?></h1>
<hr id="mainLine">
<!-- <div class="popDiv"> -->

<?php dynamic_sidebar('bastakat'); ?>


<!-- </div>  -->

<?php
get_footer();
?>