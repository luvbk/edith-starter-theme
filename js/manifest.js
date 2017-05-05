//= include ../inc/bootstrap-sass/assets/javascripts/bootstrap.js
//= include ../js/lib/bootstrap.offcanvas.js

jQuery(document).ready(function( $ ) {
	
    $(".toggle-menu").click(function(e) {
			$(this).toggleClass("on");
			$(".mobile-nav").toggleClass("active");
			e.preventDefault();
			});
	
});