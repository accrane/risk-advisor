/**
 *	Agility
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

$(document).ready(function () {
				
			// Highlight some nav things. Add an "active" class
				
			$("[href]").each(function() {
    			if (this.href == window.location.href) {
        	$(this).addClass("active");
        	}
    		});
			
			
			
			var $container = $('#isotope-container');
			// init
			$container.isotope({
			  // options
			  masonry: {
				  columnWidth: 320,
  				  gutter: 20
						},
				  itemSelector: '.item'
			});


			$('.product').matchHeight();
			
			
			
						
			
			
		
	
		
});// END #####################################    END