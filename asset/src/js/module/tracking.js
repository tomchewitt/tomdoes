// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var tracking = (function() {

	var tracking = {};

	function init() {
		var links = document.querySelectorAll('.ajax-nav'), i;

		for (i = 0; i < links.length; ++i) {
			var pageid = links[i].getAttribute('data-pageid');
			var link = links[i].getAttribute('href');
			_gaq.push(['_trackEvent', pageid, 'Click', link]);
		}
	}
	
	tracking.setup = function() {
		init();
	}


	// RETURN MODULE
	return tracking;

});

