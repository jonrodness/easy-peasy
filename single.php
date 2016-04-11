
<?php get_header(); ?>

        <div class="container">

          <div class="">

            <div class="single-post">
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="post-image">
                  <?php
                    $thumbnail_id = get_post_thumbnail_id(); 
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                    $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                  ?>                  
                  <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></p>
                </div>

                <div class="post-body">

                  <div class="col-md-10">
                  
                    <h1><?php the_title(); ?></h1>

                    <p>
                      <em>
                        By <?php the_author(); ?> 
                        on <?php echo the_time('l, F, jS. Y');?>
                        in the category <?php the_category( ', '); ?>.
                        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                      </em>
                    </p>

                    <?php the_content(); ?>

                    <?php comments_template(); ?>

                  </div>
                  
                  <div class="col-md-2 sidebar-container">
                    <?php get_sidebar(); ?>            
                  </div>

                </div>

              <?php endwhile; else: ?>

                <div class="page-header">
                  <h1>Oh no!</h1>
                </div>

              <p>No content is appearing for this page!</p>

              <?php endif; ?>

            </div>

          </div>

        </div>

      </div>

      <hr>

<?php get_footer(); ?>