<?php
  /*
    Template Name: About
  */
?>

  <div class="container">
    <?php get_header(); ?>

    <div class="main-navigation">
      <!-- Navbar -->
      <?php include( get_template_directory(). '/navbar.php'); ?>
    </div>    

    <div class="row row-offcanvas row-offcanvas-right">

          <div class="col-md-9">

            <p class="pull-right visible-xs">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Sidebar</button>
            </p>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
          <?php if ( has_post_thumbnail() ): ?>

            <div class="about-image"> 
            
              <?php the_post_thumbnail(); ?> 

              <?php the_content(); ?>
            
            </div>

          <?php endif; ?>

        <?php endwhile; else: ?>

          <p> Sorry no content </p>
        
        <?php endif; ?>
      
      </div>

       <?php get_sidebar(); ?>

    </div>
      
<?php get_footer(); ?>