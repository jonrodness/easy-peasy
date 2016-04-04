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

  // $(document).ready(function() {
  //   var $navbar = $('.navbar');
  //   var $navbarTop = $navbar.offset().top;

  //   var scrollTop = $(window).scrollTop();    

  //   $(window).on('scroll', function() {
  //     var navbarHeight = $navbar.height();
  //     var fixedNavbarTop = $navbar.offset().top;
  //     var newScrollTop = $(window).scrollTop();

  //     if (scrollTop > $navbarTop) {
  //       // scrolltop is below logo/navbar
  //       $navbar.addClass('navbar-fixed-top');        
        
  //       if (newScrollTop < scrollTop) {
  //         // scroll direction is up
  //         $navbar.animate({
  //           top: navbarHeight + "px"
  //         });
  //       } else {
  //         //scroll direction is down
  //         if($navbar.offset().top !== 0) {
  //           $navbar.animate({
  //             top: 0
  //           });
  //         }
  //       }
  //     } else {
  //       // scrolltop is above logo/navbar        
  //       $navbar.removeClass('navbar-fixed-top');
  //     }
  //     scrollTop = newScrollTop;
  //   });
  // });
  
</script>