// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var tracking = (function() {

	var tracking = {};

	function init() {
		console.log('tracking init');

		var links = document.querySelectorAll('.ajax-nav'), i;

		for (i = 0; i < links.length; ++i) {
			var pageid = links[i].getAttribute('data-pageid');
			var link = links[i].getAttribute('href');
			_gaq.push(['_trackEvent', pageid, 'Click', link]);
		}
	}
	
	tracking.setup = function() {
		console.log('tracking setup');
		init();
	}


	// RETURN MODULE
	return tracking;

});

