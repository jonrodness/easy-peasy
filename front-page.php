<?php get_header(); ?>
        
        <div class="front-page">
                    
          <div class="col-md-10 new-posts-container">
                    
          <!-- loop through all posts -->
          <?php 
            $args = array( 'post_type' => 'post' );
            $the_query = new WP_QUERY( $args );
          ?>

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="post-preview">
              <div class="post-header">
                <a href="<?php the_permalink(); ?>">
                  <h1 class="post-title"><?php the_title(); ?></h1>
                </a>      
                <h1 class="post-date">
                  <?php 
                    $format = 'F j, Y';
                    the_date( $format ); 
                  ?>
                </h1>
              </div>

              <div class="post-content">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?> 
                  </a>

                <div class="post-excerpt">
                   <?php echo get_the_excerpt() ?>
                  
                  <a href="<?php the_permalink(); ?>">
                    <p>Read More ... </p>
                  </a>                   
                </div>

              </div>


            </div>
            
          <?php endwhile; else: ?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>

          <p>No content is appearing for this page!</p>

          <?php endif; ?>

        </div>
        
        <div class="col-md-2 sidebar-container">
          <?php get_sidebar(); ?>
        </div>
      
      </div>

      <hr>
    
    </div>

  <?php get_footer(); ?>