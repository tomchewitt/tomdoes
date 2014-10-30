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

var contentLocation = document.querySelector('section.content');
GetPage.load('Home', 'pages/home/', contentLocation);


// CANVAS FOR HERO HOMEPAGE
var canvas = document.getElementById("heroCanvas");
var canvasContext = canvas.getContext("2d");

var canvasBackground = new Image();
canvasBackground.src = "/asset/dist/img/bg.jpg";

var drawBlur = function() {
	// Store the width and height of the canvas for below
	var w = canvas.width;
	var h = canvas.height;
	
	// This draws the image we just loaded to our canvas
	canvasContext.drawImage(canvasBackground, 0, 0, w, h);
	
	// This blurs the contents of the entire canvas
	stackBlurCanvasRGBA("heroCanvas", 0, 0, w, h, 30);
};

canvasBackground.onload = function() {
	drawBlur();
};
