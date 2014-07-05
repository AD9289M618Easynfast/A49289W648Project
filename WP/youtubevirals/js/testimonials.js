/* 
Copyright 2012 DesignedByDash.com | License required for use.
*/
(function($) {
	
	var smoothieTestimonials = function(element, options) {

		var defaults = $.extend({}, $.fn.dbdtestimonials.defaults, options);
		
		var $mainElement = $(element);
		var $currentElement;
		
		totalElems = $mainElement.find('.testimonial-wrapper').length;
		$currentElement = $mainElement.find('.testimonial-wrapper:eq(0)');

		setInterval(function() {
			
			var index = $currentElement.index();
			
			if((index + 1) != totalElems) {

				$currentElement.fadeOut(defaults.transitionOut, function() {
					var nextElem = $currentElement.next();
					
					nextElem.fadeIn(defaults.transitionIn);
					$currentElement = nextElem;
				});
			} else {
				
				$currentElement.fadeOut(defaults.transitionOut, function() {
					var nextElem = $mainElement.find('.testimonial-wrapper:eq(0)');
					
					nextElem.fadeIn(defaults.transitionIn);
					$currentElement = nextElem;
				});	
			}
			
		}, defaults.interval);
		
		
	}
	
	$.fn.dbdtestimonials = function(options) {
		var dbdt = new smoothieTestimonials(this, options);
	}
	
	$.fn.dbdtestimonials.defaults = {
		interval		: 5000,
		transitionIn	: 1500,
		transitionOut	: 1500	
	}
	
})(jQuery);

jQuery(document).ready(function(e) {

	if(jQuery('.testimonials').length == 1) {
    	jQuery('.testimonials').dbdtestimonials();
	}
	
});