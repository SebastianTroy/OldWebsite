$(document).ready(function() {
	// Make sure all content_boxes are floating the right way
	column_align();
	
	// When the user clicks on the minimise button of a content box, hide the
	// box's content
	$('.box_heading').on('click', function() {
		// if the content box is minimised
		if ($(this).parent().find('.content').css('display') == 'none') {
			// embiggened, remove rounded corners at bottom of header
			$(this).css("border-bottom-left-radius", 0);
			$(this).css("border-bottom-right-radius", 0);
			// show the content
			$(this).parent().find('.content').slideDown(1000, function(){
				// Make sure all content_boxes are floating the right way
				column_align();
			});
		}
		// if the content box is maximised
		else {
			// emsmallened, hide the content
			$(this).parent().find('.content').slideUp(1000, function() {
				// Once completely hidden, round the header corners
				$(this).parent().find('.box_heading').css("border-bottom-left-radius", "0.3cm");
				$(this).parent().find('.box_heading').css("border-bottom-right-radius", "0.3cm");
				// Make sure all content_boxes are floating the right way
				column_align();
			});
		}
	});
	
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
