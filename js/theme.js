jQuery(document).ready(function ( $ ) {
	$('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active')
	});

	// Highlight menu items on hover
	
	// var $menuItem = $("nav .menu-item>a");
	// var handleMenuMouseIn = function() {
	// 	$(this).animate({color: "rgb(153, 255, 102)"}, 300);
	// };
	// var handleMenuMouseOut = function() {
	// 	$(this).animate({color: "rgb(0, 0, 0)"}, 250);
	// };
	// $menuItem.hover(handleMenuMouseIn, handleMenuMouseOut);  
});