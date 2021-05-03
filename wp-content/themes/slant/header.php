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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css' ?>">

    <title>Blomsterslanten</title>
</head>
<body>

<?php wp_head(); ?>

<header>

<div id="header-top-div">
    <div class="header-top-left-right" id="header-top-div-left">
        <h2><a id="logo" href="<?php echo get_site_url() ?>" rel="home">BlomsterSLANTen</a></h2>
            
        
        <p>din blomsterbutik online</p>
    </div>

    <div class="header-top-left-right" id="header-top-div-right">

    </div>  
</div>

<div id="header-bottom-div">
    <?php wp_nav_menu(); ?>
</div>

</header>

<div class="flex-wrapper">
<main>