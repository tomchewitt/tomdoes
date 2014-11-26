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

	// RETURN MODULE
	return parallax;

})();
	/*

	function findPos(obj) {
		var curleft = curtop = 0;
		if (obj.offsetParent) {
			do {
				curleft += obj.offsetLeft;
				curtop += obj.offsetTop;
			} while (obj = obj.offsetParent);
			return [curleft,curtop];
	}
	*/


/*

	// HERO DIMENSIONS
	var oSkrollrAttr;

	// CHECK DOC FOR APPROPRIATE ELEMENTS
	function checkDoc() {

		if (!(document.querySelector('.page-header'))) {
			return;
		}
		
		var nPageHeader = (window.innerHeight / 2) - (document.querySelector('.page-header').offsetHeight / 2) - 40 || 0;

		// MAIN ATTR OBJ
		oSkrollrAttr = {
			heroHeader: {
				data: [
					'data-0',
					'data-' + nPageHeader
				],
				val: [
					'position:fixed; top:!' + (window.innerHeight / 2) + 'px; left:50%;',
					'position:absolute; top:!' + ((window.innerHeight / 2) + nPageHeader - (document.querySelector('.header').offsetHeight)) + 'px; left:50%;',
				]
			},
			heroGradient: {
				data: [
					'data-0',
					'data-' + (window.innerHeight / 2)
				],
				val: [
					'opacity: 0.7;',
					'opacity: 1;',
				]
			},
			projectArrows: {
				data: [],
				val: []
			}
		}
		

		// SET ATTR
		for (var property in oSkrollrAttr) {
		    if (document.querySelector('#' + property)) {
		    	setupAttr(property);
		    }
		}
	}

	// ADD THE ATTR
	function setupAttr(elm) {
		var $elm = document.querySelector('#' + elm);
		var aData = oSkrollrAttr[elm].data;
		var aVal = oSkrollrAttr[elm].val;

		for (i = 0; i < aData.length; i++) {
			$elm.setAttribute(aData[i], aVal[i]);
		}
	}

	*/
