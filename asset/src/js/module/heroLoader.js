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

		// PUSH IMAGE TO ARR
		var imgs = document.querySelectorAll('img'), i;

		for (i = 0; i < imgs.length; ++i) {
			aImgs.push(imgs[i].src);
		}

		// if (document.querySelector('.hero')) {
		// 	// PUSH IMAGE TO ARR
		// 	// var heroSrc = document.querySelector('.hero img').src;
		// 	// aImgs.push(heroSrc);
			
		// }

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

		// SETUP BACKGROUND COLOURS
		if (document.querySelector('.contact')) {
			document.body.style.background = '#2E3042';
		} else {
			document.body.style.background = '#FFFFFF';
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

	        console.log(oImg.src);

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


	// // WINDOW RESIZE
	// window.onresize = function() {
	// 	console.log('change height');
	// 	if (document.querySelector('section.hero')) {
	// 		// SET HEIGHT OF HERO
	// 		console.log('height should be changing..');
	// 		var $hero = document.querySelector('.hero');
	// 		if (document.querySelector('.hero .pointer')) {
	// 			var nPointer = document.querySelector('.hero .pointer').offsetHeight;
	// 			$hero.style.height = (window.innerHeight - $hero.offsetTop + nPointer) + 'px';
	// 		} else {
	// 			$hero.style.height = (window.innerHeight - $hero.offsetTop) + 'px';
	// 		}
	// 	}
	// };
	


	// RETURN MODULE
	return heroLoader;

})();
