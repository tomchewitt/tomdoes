// *****************************************************************
// INIT
// *****************************************************************


// SIZE NAV
function sizeNav() {
	var winWth = window.innerWidth;
	var icoWth = document.querySelector('.icon-size').offsetWidth;
	var liWth = Math.floor((winWth - icoWth) / 4) + 'px';

	var elms = document.querySelectorAll('.nav-size');
	for (var i = 0; i < elms.length; i++) {
		elms[i].style.width = liWth;
		if (i == 1) {
			elms[i].style.marginRight = icoWth + 'px';
		}
	}

	console.log(winWth, icoWth, liWth);
}
// sizeNav();


// TEST FOR WEBKIT (blur??)
var isWebkit = 'WebkitAppearance' in document.documentElement.style
if (isWebkit) {
	console.log('isWebkit');
} else {
	console.log('isNotWebkit');
}


// RESIZE
window.onresize = function(event) {
    // sizeNav();
};
