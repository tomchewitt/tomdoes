var GetPage = (function () {

    // constructor
    var GetPage = {};

    // vars
    var pageTitle;
    var pageUrl;
    var $content;

	// LOAD THE DOC
	GetPage.load = function (title, url, location) {
		pageTitle = title;
		pageUrl = url;
		$content = location;

		ajaxReq();
	};

	function ajaxReq() {

		// NEW REQUEST
		var request = new XMLHttpRequest();

		// OPEN PAGE
		request.open('GET', pageUrl, true);

		// ONLOAD
		request.onload = function() {
		  if (request.status >= 200 && request.status < 400){
		    $content.innerHTML = request.responseText;
		  } else {
		    console.log('Server reached, but error returned');
		  }
		};

		// ERROR
		request.onerror = function() {
		  console.log('Connection error');
		};

		// SEND REQUEST
		request.send();
	}
	

    // RETURN
    return GetPage;
})();

var Loader = (function () {
	

    // constructor
    var Loader = {};

	// LOAD THE DOC
	Loader.loadDoc = function () {

	};




	

    // RETURN
    return Loader;
});

// *****************************************************************
// INIT
// *****************************************************************

var $content = document.querySelector('section.content');
// GetPage.load('Home', 'pages/home/', $content);

$content.querySelector('.hero').style.height = window.innerHeight + 'px';
console.log(window.innerHeight);
