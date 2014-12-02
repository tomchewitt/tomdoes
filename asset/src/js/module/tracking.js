// *****************************************************************
// TRACKING
// *****************************************************************

// GOOGLE EMBED
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-16424514-4', 'auto');
ga('send', 'pageview');

// TRACKING MODULE
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

})();

