<div class="sidebar">

	<?php if ( ! dynamic_sidebar( 'page' ) ): ?>
	<?php endif; ?>

</div>

<script>
  // /* Fix sidebar to top of page */
  // $(document).ready(function(){
  //   var $sidebar = $('.sidebar');
  //   var $sidebarTop = $sidebar.offset().top;

  //   $(window).on('scroll', function() {
  //     var scrollTop = $(window).scrollTop();

  //     if (scrollTop < $sidebarTop) {
  //       $sidebar.addClass('sidebar-fixed-top');
  //     }
  //     else {
  //       $sidebar.removeClass('sidebar-fixed-top'); 
  //     }
  //   });
  // });
</script>

