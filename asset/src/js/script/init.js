// *****************************************************************
// INIT
// *****************************************************************




// TEST FOR WEBKIT (blur??)
var isWebkit = 'WebkitAppearance' in document.documentElement.style
if (isWebkit) {
	console.log('isWebkit');
} else {
	console.log('isNotWebkit');
}


// RESIZE
window.onresize = function(event) {
    //
};
