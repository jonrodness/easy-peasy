      <footer>
<!--   <p id="copyright">&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>   -->  
      <div id="footer-menu">
	        <?php
		        $args = array(
		          'menu' => 'footer-menu',
		          'container' => 'false'
		        );
	          	wp_nav_menu ( $args );
	        ?>
    	</div>
      </footer>
    </div> <!-- /container -->

    <?php wp_footer(); ?>

    <div class="modal fade" id="contactForm">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Contact Us</h4>
	      </div>
	      <div class="modal-body">
	        
	        <?php 

	      		if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
	      	
	      	?>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
    	var $contactItem = $("#footer-menu .contact-item a");
    	var elementAttributes = {
    		href : "#contactForm",
    		"data-toggle" : "modal"
    	}
    	$contactItem.attr(elementAttributes);
	</script>


  </body>
</html>