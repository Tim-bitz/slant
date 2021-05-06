<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css' //get_template_directory_uri() länkar till themes-mappen ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/header.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footer.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/home.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/single-product.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/shop.css' ?>">

    <title>Blomsterslanten</title>
</head>
<body>

<?php wp_head(); ?>

<header id="mobile">
    <div id="mobile-header-left">
        <a id="logo" href="<?php echo get_site_url() ?>" rel="home"><img src="<?php echo get_site_url().'/assets/img/logo - changed.png' ?>"></a>
    </div>
    <div id="mobile-header-right">
        
    </div>
</header>

<header id="desktop">
    <div id="header-left">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-header' ) ); ?>    
    </div>

    <div id="header-center">
        <a id="logo" href="<?php echo get_site_url() ?>" rel="home"><img src="<?php echo get_site_url().'/assets/img/logo - changed.png' ?>"></a>
    </div>

    <div id="header-right">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-header-two' ) ); ?>   
    </div>
</header>

<div class="flex-wrapper">
<main>

