//A test JS function just to check if everything works as planned
$(document).ready(function() {

	consoleTest();

	tabController();

	newsletterPopup();

	// Init the resize function for frosted glass
	$( window ).resize(function() {
	fixCanvasPosition('#headerWrapper', '#hero');
	});
	fixCanvasPosition('#headerWrapper', '#hero');
});
