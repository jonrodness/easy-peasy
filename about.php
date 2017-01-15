<?php
  /*
    Template Name: About
  */
?>

    <?php get_header(); ?>

        <div class="col-md-12 about-content">

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

    </div>
      
<?php get_footer(); ?>

<script>
  var $aboutContent = $(".about-content");
  var aboutHeight = $aboutContent.height();
  if (aboutHeight) {
    $(".col-md-2").css("max-height", aboutHeight);
  }
</script>