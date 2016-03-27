    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Is extra home link needed?
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        -->
      </div>

      <div id="navbar" class="navbar-collapse collapse">

        <?php
          $args = array(
            'menu'        => 'header-menu',
            'menu_class'  => 'nav navbar-nav',
            'container'   => 'false'
          );
          wp_nav_menu( $args );
        ?>
                
      </div><!--/.navbar-collapse -->
    </nav>


<script>
  /* Fix navbar to top of page */

  $(document).ready(function(){
    var $navbar = $('.navbar');
    var $navbarTop = $navbar.offset().top;

    $(window).on('scroll', function() {
      var scrollTop = $(window).scrollTop();

      if (scrollTop > $navbarTop) {
        $navbar.addClass('navbar-fixed-top');
        //$navbar.css('opacity', 0.6);
      }
      else {
        $navbar.removeClass('navbar-fixed-top'); 
        //$navbar.css('opacity', 1);
      }
    });

    /* Increase opacity on navbar hover */
    // $navbar.hover(
    //   function(){
    //     if ($(window).scrollTop() > $navbarTop) {
    //       $(this).css('opacity', 1);
    //     }
    //   },
    //   function(){
    //     if ($(window).scrollTop() > $navbarTop) {
    //       $(this).css('opacity', 0.6);
    //     }
    //   }
    // );

  });
</script>