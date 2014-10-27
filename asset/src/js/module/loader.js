var loader = (function () {

    // VARS
    var doc = '';
    var title = '';

    // constructor
    var loader = function () {

    };

	// LOAD THE DOC
	loader.loadDoc = function (docurl, doctitle, iswork) {
		doc = docurl || '';
		title = doctitle || '';
		loader.work = iswork || false;

		console.log(doc, title, loader.work);

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

		        if (loader.work) {
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
    return loader;
})();


/*
$(window).on('scroll', function () {
               var scrolled = $(this).scrollTop();

               $('#article-pagination-feed > li').filter(function () {
                   return scrolled >= $(this).offset().top - 200;
               }).addClass('read');
               $('#article-pagination-feed > li').filter(function () {
                   return scrolled < $(this).offset().top - 200;
               }).removeClass('read');
           });
           */
