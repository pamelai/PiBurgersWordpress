<!DOCTYPE html>
<html lang="<?= language_attributes(); ?>">
<head>
    <meta charset="<?= bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?= bloginfo("stylesheet_url") ?>">
    <link href="<?= bloginfo("stylesheet_directory") ?>/favicon.ico" rel="icon" type="image/ico" />


    <?php

        wp_head();

    ?>

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark ">
      <h1><a class="navbar-brand" href="<?= home_url(); ?>"><?= bloginfo('name') ?></a></h1>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

         <?php 
            wp_nav_menu([
               "menu" => "nav_header",
               "theme_location"=> "nav_header",
               "depth"=> 2,
               'menu_class'=> 'nav navbar-nav ml-auto mt-2 mt-lg-0',
               'container'=> 'ul',
               "container_class"  => "",
               "container_id"     => "",
               "fallback_cb"=>"WP_Bootstrap_Navwalker::fallback",
               "walker" => new WP_Bootstrap_Navwalker()
            ]);
         ?>

      </div>
   </nav>