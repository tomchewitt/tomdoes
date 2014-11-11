// *****************************************************************
// HERO LOADER
// *****************************************************************
var heroLoader = (function() {
	
	// constructor
	var heroLoader = {};

	// PRIVATE VARS
	// var $ = function (selector) { return document.querySelector(selector) };
	var vPageToLoad;
	var aImgs;
	var nImgsLoaded;

	// PRIVATE METHODS
	function preloadHero() {
		aImgs = [];

		if (document.querySelector('.hero')) {
			console.log('HERO: true');
			// PUSH IMAGE TO ARR
			var heroSrc = document.querySelector('.hero img').src;
			aImgs.push(heroSrc);
		}

		if (document.querySelector('section.hero')) {
			// SET HEIGHT OF HERO
			var $hero = document.querySelector('.hero');
			$hero.style.height = (window.innerHeight - $hero.offsetTop) + 'px';
		}

		preloadImg(aImgs);
		
	}


	function preloadImg(aImgs) {
		console.log(aImgs, aImgs.length);

		if (aImgs.length == 0) {
			ajaxLoader.completed();
			return;
		}

		nImgsLoaded = 0;
		for(var i = 0; i < aImgs.length; i++ ) {
	        var oImg = new Image();
	        oImg.src = aImgs[i];
	        oImg.onload = heroesReady;

	    }
	}


	function heroesReady() {
		nImgsLoaded++;
		if (nImgsLoaded == aImgs.length) {
			ajaxLoader.completed();
		}
	}



	// PUBLIC FUNCTIONS
	heroLoader.setup = function(page) {
		vPageToLoad = page;
		preloadHero();		
	}


	// RETURN MODULE
	return heroLoader;

})();


/*


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
	
