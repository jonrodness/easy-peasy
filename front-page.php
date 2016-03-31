  <?php get_header(); ?>
          <div class="col-md-2"></div>
          <div class="col-md-8 new-posts-container">  
          <!-- loop through all posts -->
          <?php 
            $args = array( 'post_type' => 'post' );
            $the_query = new WP_QUERY( $args );
          ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="post-header">
              <h1 class="post-date">
                <?php 
                  $format = 'm/d/Y';
                  the_date( $format ); 
                ?>
              </h1>
              <a href="<?php the_permalink(); ?>">
                <h1 class="post-title"><?php the_title(); ?></h1>
              </a>
            </div>

            <div class="post-image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?> 
                </a>
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