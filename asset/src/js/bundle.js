var Loader = (function () {

    // VARS
    var doc = '';
    var title = '';

    // constructor
    var Loader = {};

	// LOAD THE DOC
	Loader.loadDoc = function (docurl, doctitle, iswork) {
		doc = docurl || '';
		title = doctitle || '';
		Loader.work = iswork || false;

		console.log(doc, title, Loader.work);

		panelIn();
	};


	// panel out
	function panelOut() {
		//console.log('panelOut');
		TweenLite.to('.panel', 0.8, { left: 0, ease:Expo.easeInOut });
		TweenLite.to('.trans', 1.2, { left: 0, ease:Expo.easeOut, delay: 0.5 });		
	}

	// panel in
	function panelIn() {
		console.log('panelIn');

		if (doc) {
			console.log('panelIn-doc');
			TweenLite.to('.panel', 1.2, { left: '-100%', ease:Expo.easeOut, delay: 0.5, onComplete:function() {
				loadTheDoc();
			}});	
			TweenLite.to('.trans', 0.8, { left: '-100%', ease:Expo.easeInOut });
		} else {
			console.log('panelIn-nodoc');
			panelOut();
		}
	}

	// load the doc
	function loadTheDoc() {
		$.ajax({
		    type: 'get',
		    url: doc,
		    data: '',
		    cache: false,
		    success: function(response) {
		        $('.content-wrap').html(response);

		        if (Loader.work) {
					slider.setup(title);
				}
		        
	 			// maybe this should happen after slider if it IS a work thing
	 			panelOut();
		    },
		    error: function(response) {
		    	alert('Error loading ajax');
		    }
		});
	}

	

    // RETURN
    return Loader;
});

// *****************************************************************
// INIT
// *****************************************************************

//loader.loadDoc('pages/home/index.html');
