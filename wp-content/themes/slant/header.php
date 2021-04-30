<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css' //get_template_directory_uri() länkar till themes-mappen ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/header.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footer.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css' ?>">

    <title>Blomsterslanten</title>
</head>
<body>

<?php wp_head(); ?>

<header>
    <div id="header-left">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-header' ) ); ?>    
    </div>

    <div id="header-center">
        <a id="logo" href="<?php echo get_site_url() ?>" rel="home"><img src="<?php echo get_site_url().'/assets/img/logo.png' ?>"></a>
    </div>

    <div id="header-right">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-header-two' ) ); ?>   
    </div>
</header>

<div class="flex-wrapper">
<main>

