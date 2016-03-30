
<?php get_header(); ?>
            
            <div class="category">

              <?php include( get_template_directory() . '/sidebar-toggle.php'); ?>

              <div class="category-title">
                <h1><?php single_cat_title(); ?></h1>
              </div>
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <div class="post-preview">

                  <div class="post-preview-left">
                    <div class="post-image">
                      <?php the_post_thumbnail(); ?> 
                    </div>
                  </div>

                  <div class="post-preview-right">
                    <div class="post-header">
                      <h1>
                        <?php 
                          $format = 'm/d/Y';
                          the_date( $format ); 
                        ?>
                      </h1>
                      <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="post-excerpt">
                       <?php echo get_the_excerpt() ?>
                    </div>
                  </div>

                </div>

              <?php endwhile; else: ?>

                <div class="page-header">
                  <h3>Oh no!</h3>
                </div>

              <p>No content is appearing for this page!</p>

              <?php endif; ?>

            </div>

          </div>
    
        </div>

<?php get_footer(); ?>