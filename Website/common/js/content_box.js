$(document).ready(function() {
	// When the user clicks on the minimise button of a content box, hide the
	// box's content
	$('.box_heading').on('click', function() {
		$(this).parent().find('.content').slideToggle(1000);
	});
});