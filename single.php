
<?php get_header(); ?>



            <div class="single-post">

               <div class="col-md-10">

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

                    <h1 class="post-date">
                        <?php echo the_time('F j, Y');?>
                    </h1>

                    <h1 class="post-title">
                      <?php the_title(); ?>
                    </h1>

                    <?php the_content(); ?>

                  </div>
                              
              </div>

              <div class="col-md-2 sidebar-container">
                <?php get_sidebar(); ?>            
              </div>

              <?php endwhile; else: ?>

              <div class="page-header">
                <h1>Check back soon!</h1>
              </div>

              <?php endif; ?>

            </div>

        </div>


      <hr>

<?php get_footer(); ?>