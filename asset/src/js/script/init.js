// *****************************************************************
// INIT
// *****************************************************************

var isWebkit = 'WebkitAppearance' in document.documentElement.style

if (isWebkit) {
	console.log('isWebkit');
} else {
	console.log('isNotWebkit');
}
