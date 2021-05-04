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

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./assets/img/bildspel.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="./assets/img/flowers.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="./assets/img/flowers.png" alt="New york" style="width:100%;">
      </div>
    </div>

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