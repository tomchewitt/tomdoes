// *****************************************************************
// WORK NAVIGATION
// *****************************************************************

// TRACKING MODULE
var workNav = (function() {

	var workNav = {};
	var oLinks, workToShow;
	var nDelay = 0;
	var $ = function (selector) { return document.querySelector(selector) }; // jQuery style

	workNav.setup = function() {
		console.log('navwork.setup');
		if (document.querySelector('.nav-work')) {
			// console.log('navwork.setup');
			init();
		}	
	}

	// SETUP oLINKS FOR MAIN NAV
	function init() {		
		oLinks = $('.nav-work').getElementsByTagName('li');

		for (var i = 0; i < oLinks.length; i++) {
			oLinks[i].onclick = switchNav;
		}
	}

	// NAV SWITCHER FOR WORK
	function switchNav() {
		if (this.classList.contains('on')) {
			return;
		} else {
			for (var i = 0; i < oLinks.length; i++) {
				oLinks[i].classList.remove('on');
			}
			this.classList.add('on');
		}
		nDelay = 0;
		workNavSwitcher(this.getAttribute('data-worknav'));
	}

	function workNavSwitcher(attr) {
		// console.log('show ' + attr + ' work');

		var projects = $('.project-list').getElementsByTagName('li');
		var dataAttr = 'data-' + attr;

		// console.log('show ' + attr + ' work | ' + dataAttr);

		// fade all of them out
		// reset their positions

		for (var i = 0; i < projects.length; i++) {

			var $proj = projects[i].getElementsByTagName('a');

			TweenLite.to($proj, 0.3, {left: '-20%', opacity: 0, ease:Quad.easeOut, onComplete:workNavRebirth, onCompleteParams:[attr, projects[i]]});
		}

	}

	function workNavRebirth(attr, $project) {

		var $proj = $project.getElementsByTagName('a');
		var dataAttr = 'data-' + attr;
		nDelay += 50;

		if (attr == 'all') {
			$project.style.display = 'block';
			TweenLite.to($proj, 0.3, {left: '0', opacity: 1, delay: (nDelay/1000), ease:Quad.easeOut});
		} else {
			if ($project.hasAttribute(dataAttr)) {
				$project.style.display = 'block';
				TweenLite.to($proj, 0.3, {left: '0', opacity: 1, delay: (nDelay/1000), ease:Quad.easeOut});
			} else {
				$project.style.display = 'none';
			}
		}
	}

	// init(); // for test purposes

	// RETURN MODULE
	return workNav;

})();
