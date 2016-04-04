<div class="col-md-3 sidebar sidebar-offcanvas">

	<?php if ( ! dynamic_sidebar( 'page' ) ): ?>

		<h3>Sidebar Setup</h3>
		<p>Please add widgets to the page sidebar to have them display here.</p>

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

