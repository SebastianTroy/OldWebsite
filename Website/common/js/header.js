// Happens when document finishes loading
$(document).ready(function() {
	// This function sets the header to fixed position and adjusts the padding
	// of the
	$('#header_container').css("position", "fixed");
	$('#page_container').css("margin-top", function() {
		return $('#header_container').height();
	});
	// This function is called whenever a user clicks on a menu "button" which
	// is a div
	$('.nav_menu_button').on('click', function() {
		var link = $(this).attr('data-link');
		window.location = link;
	});

	// This function will be executed when the user scrolls the page.
	$(window).scroll(function() {
		// Once the user has scrolled down once, hide the header
		if ($(window).scrollTop() > 0) {
			$(".title").slideUp({
				duration : 1000,
				step : function() {
					$('#page_container').css("margin-top", function() {
						return $('#header_container').height();
					});
				}
			});
		} else {
			$(".title").slideDown({
				duration : 1000,
				step : function() {
					$('#page_container').css("margin-top", function() {
						return $('#header_container').height();
					});
				}
			});
		}
	});
});