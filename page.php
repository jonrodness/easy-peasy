
<?php get_header(); ?>

     <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">

          <div class="col-md-9">

            <?php include( get_template_directory() . '/sidebar-toggle.php'); ?>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="post-preview">
                <div class="page-header">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="post-image">
                  <?php the_post_thumbnail(); ?> 
                </div>
                <div class="post-content">
                  <?php the_content(); ?>
                </div>
              </div>

            <?php endwhile; else: ?>

              <div class="page-header">
                <h1>Check back soon!</h1>
              </div>

            <?php endif; ?>

          </div>

          <?php get_sidebar(); ?>
    
        </div>

<?php get_footer(); ?>