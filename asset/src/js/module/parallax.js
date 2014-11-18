// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var parallax = (function() {
	
	// constructor
	var parallax = {};
	var bGradient;
	var bHeader;
	var bArrows;
	var nPageHeaderOffset;
	var nPageHeaderPosition;
	
	
	function init() {
		var nWinOffset = document.body.scrollTop;

		if (bGradient) {	
			var nBlockOffset = window.innerHeight; // document.querySelector('.block').scrollTop;
			var nPercentage = 0.6 + (nWinOffset / nBlockOffset) * 0.7; // * 1.2;

			if (nWinOffset < nBlockOffset) {
				document.querySelector('.gradient').style.opacity = nPercentage;
				// console.log(nWinOffset, nBlockOffset, nPercentage);
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
			bGradient = true;
			bHeader = true;
			nPageHeaderOffset = (window.innerHeight / 2) - (document.querySelector('.page-header').offsetHeight / 2) - 40;
			nPageHeaderPosition = (window.innerHeight / 2) + nPageHeaderOffset - (document.querySelector('.header').offsetHeight);
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
