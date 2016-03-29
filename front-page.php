  <?php get_header(); ?>
          <div class="col-md-2"></div>
          <div class="col-md-8">  
          <!-- loop through all posts -->
          <?php 
            $args = array( 'post_type' => 'post' );
            $the_query = new WP_QUERY( $args );
          ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="post-header">
              <h1>
                <?php 
                  $format = 'm/d/Y';
                  the_date( $format ); 
                ?>
              </h1>
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="post-image">
                <?php the_post_thumbnail(); ?> 
            </div>
            <hr>

          <?php endwhile; else: ?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>

          <p>No content is appearing for this page!</p>

          <?php endif; ?>

        </div>

    </div>

  <?php get_footer(); ?>