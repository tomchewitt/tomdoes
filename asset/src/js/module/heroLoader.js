// *****************************************************************
// HERO LOADER
// *****************************************************************
var heroLoader = (function() {
	
	// constructor
	var heroLoader = {};

	// PRIVATE VARS
	var vPageToLoad;
	var aImgs;
	var nImgsLoaded;

	// PRIVATE METHODS
	function preloadHero() {
		aImgs = [];

		if (document.querySelector('.hero')) {
			// console.log('HERO: true');
			// PUSH IMAGE TO ARR
			var heroSrc = document.querySelector('.hero img').src;
			aImgs.push(heroSrc);
		}

		if (document.querySelector('section.hero')) {
			// SET HEIGHT OF HERO
			var $hero = document.querySelector('.hero');
			if (document.querySelector('.hero .pointer')) {
				var nPointer = document.querySelector('.hero .pointer').offsetHeight;
				$hero.style.height = (window.innerHeight - $hero.offsetTop + nPointer) + 'px';
			} else {
				$hero.style.height = (window.innerHeight - $hero.offsetTop) + 'px';
			}
		}

		parallax.setup();
		preloadImg(aImgs);
		
		
	}


	function preloadImg(aImgs) {
		// console.log(aImgs, aImgs.length);

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
