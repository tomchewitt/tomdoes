// *****************************************************************
// PARALLAX ANIMATIONS
// *****************************************************************
var parallax = (function() {
	
	// constructor
	var parallax = {};
	
	// MAIN ATTRIBUTES OBJECT	
	var oSkrollrAttr = {
		heroImg: {
			data: [
				'data-top',
				'data-top-bottom'
			],
			val: [
				'width:1900px; height:1900px; opacity:1;',
				'width:10px; height:10px; opacity:0;'
			]
		},
		projectArrows: {
			data: [],
			val: []
		}
	}

	// CHECK DOC FOR APPROPRIATE ELEMENTS
	for (var property in oSkrollrAttr) {
	    if (document.querySelector('#' + property)) {
	    	setupAttr(property);
	    }
	}

	// ADD THE ATTRIBUTES
	function setupAttr(elm) {
		var $elm = document.querySelector('#' + elm);
		var aData = oSkrollrAttr[elm].data;
		var aVal = oSkrollrAttr[elm].val;

		for (i = 0; i < aData.length; i++) {
			$elm.setAttribute(aData[i], aVal[i]);
		}
	}
	
	// SETUP SKROLLR
	var s = skrollr.init({
		forceHeight: false
	});


	// RETURN MODULE
	return parallax;

})();
