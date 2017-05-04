$(document).ready(function() {

    $('#fullpage').fullpage({
		menu: true,
		scrollingSpeed: 500,
		verticalCentered: false,
        fitToSection: true,

        afterLoad: function() {
            $(window).trigger('resize');
        }
	});
});

