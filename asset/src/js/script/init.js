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
