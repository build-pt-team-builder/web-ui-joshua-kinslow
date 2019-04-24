$(document).ready(function() {
	var isMobile = screen.width <= 786 ? true : false;
	console.log(`isMobile = ${isMobile}`);

	$(window).resize(() => {
		screen.width <= 786 ? (isMobile = true) : (isMobile = false);
		console.log(isMobile);
	});
	var scrollState = 0;
	$(window).scroll(function(event) {
		if (isMobile) {
			var navClasses = document.querySelector('nav.navbar.sticky-top').classList;
			// Current scroll position
			var currentScroll = window.scrollY;
			if (window.scrollY === 0) {
			} else if (currentScroll > scrollState) {
				navClasses.remove('open');
				navClasses.add('collapse');
			} else {
				navClasses.remove('collapse');
				navClasses.add('open');
			}
			// Set previous scroll position
			scrollState = window.scrollY;
		}
	});
});
