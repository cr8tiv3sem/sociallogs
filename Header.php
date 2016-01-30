<!doctype HTML>
   <HTML> <?php language_attributes();?>>
   <head>
   <meta charset="<?phpbloginfo('char set'); ?>
  <meta name="viewport" content="width-device with">
    <title><?php.bloginfo('name'); ?> </title>
   <?php wp_head(); ?>

    </head>
 <body <?php body_class(); ?>>

  <!--site-header-->
  <header class="site-header">
     <h1><a ref="<?php echo home_url"><?php bloginfo('name'); ?></a></h1>
   <h3><?php bloginfo('description'); ?>
   </header><!-- /site-header -->
