
<?php get_header(); ?>

            <?php include( get_template_directory() . '/sidebar-toggle.php'); ?>

            <h1><?php single_cat_title(); ?></h1>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>

              <div class="post-image">
                <?php the_post_thumbnail(); ?> 
              </div>

              <div class="post-excerpt">
                <?php echo get_the_excerpt() ?>
              </div>

            <?php endwhile; else: ?>

              <div class="page-header">
                <h3>Oh no!</h3>
              </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>

          </div>
    
        </div>

<?php get_footer(); ?>