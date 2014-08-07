$(document).ready(function() {
	// This function sets the header to fixed position and adjusts the padding
	// of the page container so they dont overlap
	$('#header_container').css("position", "fixed");
	$('#page_container').css("margin-top", function() {
		return $('#header_container').outerHeight();
	});
	// This function will be executed when the user resizes the page. (Not responding to changes in window size)
	$(screen).on("resize", adjust_header);
	// This function will be executed when the user scrolls the page.
	$(window).on("scroll", adjust_header);

	function adjust_header() {
		// Once the user has scrolled down, hide the title of the header
		if ($(window).scrollTop() > 0) {
			$('.title').slideUp({
				duration : 500,
				step : function() {
					$('#page_container').css("margin-top", function() {
						return $('#header_container').outerHeight();
					});
				}
			});
			// If the user has scrolled back to the top, unhide the title
		} else {
			$('.title').slideDown({
				duration : 500,
				step : function() {
					$('#page_container').css("margin-top", function() {
						return $('#header_container').outerHeight();
					});
				}
			});
		}
	}
});