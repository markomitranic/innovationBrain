// Init the resize function for frosted glass
	fixCanvasPosition('#headerWrapper', '#hero');
	$( window ).resize(function() {
	    fixCanvasPosition('#headerWrapper', '#hero');
	});