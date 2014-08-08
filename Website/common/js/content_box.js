$(document).ready(function() {
	// Add resize icons to all box headers
	$('.box_heading').append('<img src="common/img/min.png"/>');
	// Minimise the appropriate content at page load
	$('.start_minimised').each(min_max);
	// Make sure all content_boxes are floating the right way
	column_align();
	// When the user clicks on the minimise button of a content box, hide the box's content
	$('.box_heading').on('click', min_max);
	//
	function min_max() {
		// if the content box is currently minimised
		if ($(this).parent().find('.content').css('display') == 'none') {
			// embiggen, remove rounded corners at bottom of header
			$(this).parent().find('.box_heading').css("border-bottom-left-radius", 0);
			$(this).parent().find('.box_heading').css("border-bottom-right-radius", 0);
			// show the content
			$(this).parent().find('.content').slideDown(1000, function() {
				// Once completely shown
				// Make sure all content_boxes are floating the right way
				column_align();
				// change the icon in the header to minimise
				$(this).parent().find('.box_heading').find('img').attr('src', 'common/img/min.png');
			});
		}
		// if the content box is currently maximised
		else {
			// emsmallen, hide the content
			$(this).parent().find('.content').slideUp(1000, function() {
				// Once completely hidden
				// round the header corners
				$(this).parent().find('.box_heading').css("border-bottom-left-radius", "0.3cm");
				$(this).parent().find('.box_heading').css("border-bottom-right-radius", "0.3cm");
				// Make sure all content_boxes are floating the right way
				column_align();
				// change the icon in the header to mamimise
				$(this).parent().find('.box_heading').find('img').attr('src', 'common/img/max.png');
			});
		}
	}
	// Prevents gaps between content
	function column_align() {
		$('.column').each(function() {
			if ($(this).offset().left < 50) {
				$(this).css("float", "left");
			} else {
				$(this).css("float", "right")
			}
		});
	}
});
