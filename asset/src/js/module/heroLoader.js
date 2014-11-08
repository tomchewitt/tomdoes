// *****************************************************************
// HERO LOADER
// *****************************************************************
var heroLoader = (function() {
	
	// constructor
	var heroLoader = {};

	// selector (jquery style)
	var $ = function (selector) {
		return document.querySelector(selector);
	};


	// PUBLIC VARS
	heroLoader.loading = false;


	// PUBLIC FUNCTIONS
	heroLoader.setup = function(vPageToLoad) {

		console.log(vPageToLoad);

		heroLoader.loading = true;

		ajaxLoader.completed();
	}




	// RETURN MODULE
	return heroLoader;

})();


/*
// HERO
document.querySelector('.hero').style.height = (window.innerHeight - document.querySelector('section.header').clientHeight) + 'px';


// NAV SWITCHER FOR WORK
function switchNav() {
	if (this.classList.contains('on')) {
		return;
	}

	for (var i = 0; i < links.length; i++) {
		links[i].classList.toggle('on');
	}
	workNavSwitcher();
}

function workNavSwitcher() {
	var navBest = $('.nav-best');
	var navBestOn = false;
	var className = 'on';

	// has class
	// YUK, find a better way of doing this!!!
	if (navBest.classList) {
		if (navBest.classList.contains(className)) {
			navBestOn = true;
		};
	} else {
		if (new RegExp('(^| )' + className + '( |$)', 'gi').test(navBest.className)) {
			navBestOn = true;
		};
	}

	// SWITCH CONTENT
	// this animation needs jazzing up a fair bit...
	if (navBestOn) {
		// nav best on
		$('.best').style.display = 'block';
		$('.rest').style.display = 'none';
	} else {
		// nav best off
		$('.best').style.display = 'none';
		$('.rest').style.display = 'block';
	}
}


// Iterate over #links <li>
// Use querySelector to target #links and then get tag names <li>
var links = $('.nav-work').getElementsByTagName('li');


// For each <li> inside #links
for (var i = 0; i < links.length; i++) {
	links[i].onclick = switchNav;
}
*/
	
