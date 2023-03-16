$(document).ready(function() {
	// Only show help relevant to OS
	if (navigator.appVersion.indexOf("Win") != -1) {
		$('.macos').each(min_max);
		$('.linux').each(min_max);
	} else if (navigator.appVersion.indexOf("Mac") != -1) {
		$('.windows').each(min_max);
		$('.linux').each(min_max);
	} else {
		$('.macos').each(min_max);
		$('.windows').each(min_max);
	}
});