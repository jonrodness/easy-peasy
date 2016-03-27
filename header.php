<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.jpg">
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>    
    
    <!-- Custom jQuery functions. Add to functions.php -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>
      <?php wp_title( '|', true, right ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="container">

    <!-- social media buttons -->
    <div class="social-nav">
      <ul>
        <li><a  href ="http://www.twitter.com"> <img src="<?php bloginfo('template_directory');?>/images/Social_Icons/twitter.png" /> </a></li>
        <li><a  href ="http://www.facebook.com/jenn.goodman.5?fref=ts"> <img src="<?php bloginfo('template_directory');?>/images/Social_Icons/facebook.png" /> </a></li>
        <li><a  href ="http://www.pinterest.com"> <img src="<?php bloginfo('template_directory');?>/images/Social_Icons/pinterest.png" /> </a></li>
        <li><a  href ="http://www.instagram.com"> <img src="<?php bloginfo('template_directory');?>/images/Social_Icons/Instagram.png" /> </a></li>
      </ul>
    </div>

    <div class="main-navigation">
      <!-- Display Front Page featured image as site logo -->
      
      
      <?php /* if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
        <?php if ( has_post_thumbnail() ): ?>
          <div class="site-logo">   
            <?php the_post_thumbnail(); ?> 
          </div>
        <?php endif; ?>
      <?php endwhile; endif; */ ?>

      <!-- retrieving logo via request -->
      <div class="site-logo">
        <a href="<?php echo get_home_url() ?>">
          <?php echo wp_get_attachment_image ( 86, "377 × 116" ) ?>
        </a>
      </div>


      <!-- Navbar -->
      <?php include( get_template_directory(). '/navbar.php'); ?>
    </div>  

    <div class="content row row-offcanvas row-offcanvas-right">

    <div class="col-md-2"></div>
    <div class="col-md-8">