// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var parallax = (function() {
	
	// constructor
	var parallax = {};
	var bGradient;
	var bNoGradient;
	var bHeader;
	var bArrows;
	var nPageHeaderOffset;
	var nPageHeaderPosition;
	
	
	function init() {
		console.log('parallax.init');
		// var nWinOffset = document.body.scrollTop;
		var nWinOffset = window.pageYOffset || document.documentElement.scrollTop;

		if (bGradient) {	
			var nBlockOffset = window.innerHeight; // document.querySelector('.block').scrollTop;
			var nPercentage; // = 0.6 + (nWinOffset / nBlockOffset) * 0.7;

			if (bNoGradient) {
				nPercentage = 0 + (nWinOffset / nBlockOffset) * 1.7;
			} else {
				nPercentage = 0.8 + (nWinOffset / nBlockOffset) * 0.3;
			}

			

			if (nWinOffset < nBlockOffset) {
				document.querySelector('.gradient').style.opacity = nPercentage;
				console.log(nWinOffset, nBlockOffset, nPercentage);
			}			
		}

		if (bHeader) {
			var $header = document.querySelector('.page-header');
			if (nWinOffset >= nPageHeaderOffset) {
				$header.style.position = 'absolute';
				$header.style.top = nPageHeaderPosition + 'px';
			} else {
				$header.style.position = 'fixed';
				$header.style.top = '50%';
			}
		}

		if (bArrows) {
			console.log('bArrows');
		}
	}


	// REFRESH
	parallax.setup = function() {
		console.log('parallax.setup');

		if (document.querySelector('.page-header')) {
			bNoGradient = false;
			bGradient = true;
			bHeader = true;
			nPageHeaderOffset = (window.innerHeight / 2) - (document.querySelector('.page-header').offsetHeight / 2) - 40;
			nPageHeaderPosition = (window.innerHeight / 2) + nPageHeaderOffset - (document.querySelector('.header').offsetHeight);
		}

		if (document.querySelector('.about')) {
			bNoGradient = true;
			bGradient = true;
			bHeader = false;
			document.querySelector('.gradient').style.opacity = 0;
		}

		if (document.querySelector('.home')) {
			bNoGradient = false;
			bGradient = true;
			bHeader = true;
		}

		if (document.querySelector('.contact') || document.querySelector('.work')) {
			bNoGradient = false;
			bGradient = false;
			bHeader = false;
		}

		// run setup
		window.onscroll = init;
	}

	
	// WINDOW RESIZE
	window.onresize = function() {
		console.log('rezise header');
		nPageHeaderOffset = (window.innerHeight / 2) - (document.querySelector('.page-header').offsetHeight / 2) - 40;
		nPageHeaderPosition = (window.innerHeight / 2) + nPageHeaderOffset - (document.querySelector('.header').offsetHeight);

		if (document.querySelector('section.hero')) {
			// SET HEIGHT OF HERO
			console.log('height should be changing..');
			var $hero = document.querySelector('.hero');
			if (document.querySelector('.hero .pointer')) {
				var nPointer = document.querySelector('.hero .pointer').offsetHeight;
				$hero.style.height = (window.innerHeight - $hero.offsetTop + nPointer) + 'px';
			} else {
				$hero.style.height = (window.innerHeight - $hero.offsetTop) + 'px';
			}
		}
	};



	// RETURN MODULE
	return parallax;

})();

