// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var parallax = (function() {
	
	// constructor
	var parallax = {};
	
	// HERO DIMENSIONS
	var oSkrollrAttr;

	// CHECK DOC FOR APPROPRIATE ELEMENTS
	function checkDoc() {

		if (!(document.querySelector('.page-header'))) {
			return;
		}
		

		// HERO DIMENSIONS
		// var nHeroNatural = document.querySelector('.hero img').naturalWidth;
		// var oHero = {
		// 	height: document.querySelector('.hero').offsetHeight,
		// 	width: document.querySelector('.hero').offsetWidth
		// }
		// SET RATIO
		// if (oHero.height > oHero.width) {
		// 	oHero.size = oHero.height;
		// } else {
		// 	oHero.size = oHero.width;
		// }

		// console.log('NATURAL: ' + nHeroNatural + ' - NEW: ' + oHero.size + ' - SCALE: ' + oHero.size / nHeroNatural);
		
		var nPageHeader = (window.innerHeight / 2) - (document.querySelector('.page-header').offsetHeight / 2) - 40 || 0;

		// MAIN ATTR OBJ
		oSkrollrAttr = {
			// heroImg: {
			// 	data: [
			// 		'data-0',
			// 		'data-' + oHero.size
			// 	],
			// 	val: [
			// 		'transform: translate(-50%, -50%) scale(' + oHero.size / nHeroNatural + ');',
			// 		'transform: translate(-50%, -50%) scale(' + (oHero.size / nHeroNatural) / 2 + ');',
			// 	]
			// },
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
		// console.log(oHero.width, oHero.height, oHero.size)

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
	
	// SETUP SKROLLR
	checkDoc();
	var s = skrollr.init({
		forceHeight: false,
		smoothScrolling: false
	});

	// REFRESH
	parallax.setup = function() {
		checkDoc();
		s.refresh();
	}

	// RETURN MODULE
	return parallax;

})();
