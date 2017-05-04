// A $( document ).ready() block.
jQuery(document).ready(function( $ ) {
	
            $(".toggle-menu").click(function(e) {
			$(this).toggleClass("on");
			$(".mobile-nav").toggleClass("active");
			e.preventDefault();
			});
	
});