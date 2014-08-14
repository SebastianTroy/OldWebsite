$(document).ready(function() {
	// Set header to fixed
	$('#header_container').css("position", "fixed");
	//
	calculate_header_size();

	// This function will be executed when the user resizes the page. (Not
	// responding to changes in window size)
	$(window).on("resize", function() {
		calculate_header_size();
	});
	// This function will be executed when the user scrolls the page.
	$(window).on("scroll", function() {
		adjust_header();
	});
	// This code checks which tab is active and sets its background colour
	var tab = $.cookie('tab');
	$('.nav_menu_button').eq(Number(tab)).css('background-color', '#aaa271');
	$.removeCookie('tab', { path: '/' });
	
	
	// When a menu button is pressed, highlight it & save its index in a cookie so it can be highlighted on the next page
	$('.nav_menu_button').on("click", function() {
		$(this).css('background-color', '#aaa271');
		$.cookie('tab', $(this).index(), { path: '/' });
	});
});

function calculate_header_size() {
	var text_size = Math.min(($(window).width() / 10), 100) + "%";
	$('#header_container').css("font-size", text_size);
	adjust_page_padding();
}

function adjust_page_padding() {
	$('#page_container').css("margin-top", function() {
		return $('#header_container').outerHeight();
	});
}

function adjust_header() {
	// Once the user has scrolled down, hide the title of the header
	if ($('.title').css('display') != 'none' && $(window).scrollTop() > 0) {
		$(window).scrollTop(1);
		$('.title').slideUp({
			duration : 200,
			step : function() {
				adjust_page_padding();
			}
		});
		// If the user has scrolled back to the top, and the page is still
		// taller than the screen
	} else if ($(window).scrollTop() == 0 && $('#master_container').height() > $(window).height()) {
		$('.title').slideDown({
			duration : 200,
			step : function() {
				adjust_page_padding();
			}
		});
	}
}