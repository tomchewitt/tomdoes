// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var parallax = (function() {
	
	// constructor
	var parallax = {};
	var bGradient;
	var bHeader;
	var bArrows;
	
	
	function init() {
		if (bGradient) {
			console.log('bGradient');
		}

		if (bHeader) {
			console.log('bHeader');
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
		}
		// run setup
		window.onscroll = init;
	}

	// RETURN MODULE
	return parallax;

})();


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
