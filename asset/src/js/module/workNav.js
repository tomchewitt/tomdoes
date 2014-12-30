// *****************************************************************
// WORK NAVIGATION
// *****************************************************************

// TRACKING MODULE
var workNav = (function() {

	var workNav = {};
	var links, workToShow;
	var $ = function (selector) { return document.querySelector(selector) }; // jQuery style

	workNav.setup = function() {
		if (document.querySelector('.work-nav')) {
			init();
		}	
	}

	// SETUP LINKS FOR MAIN NAV
	function init() {

		links = $('.nav-work').getElementsByTagName('li');

		for (var i = 0; i < links.length; i++) {
			links[i].onclick = switchNav;
		}
	}

	// NAV SWITCHER FOR WORK
	function switchNav() {
		if (this.classList.contains('on')) {
			return;
		} else {
			for (var i = 0; i < links.length; i++) {
				links[i].classList.remove('on');
			}
			this.classList.add('on');
		}
		workNavSwitcher(this.getAttribute('data-worknav'));
	}

	function workNavSwitcher(attr) {
		console.log('show ' + attr + ' work');

		var projects = $('.project-list').getElementsByTagName('li');
		var dataAttr = 'data-' + attr;

		console.log('show ' + attr + ' work | ' + dataAttr);

		for (var i = 0; i < projects.length; i++) {
			if (attr == 'all') {
				projects[i].style.display = 'block';
			} else {
				if (projects[i].hasAttribute(dataAttr)) {
					projects[i].style.display = 'block';
				} else {
					projects[i].style.display = 'none';
				}
			}
			
		}

	}


	init(); // for test purposes

	// RETURN MODULE
	return workNav;

})();
