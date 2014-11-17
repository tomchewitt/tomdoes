/**
*
* AUTHOR: Tom Hewitt | @tomchewitt
* FORKED FROM: https://github.com/giabao/mdn-ajax-nav-example
*
**/

var ajaxLoader = (function () {
	// console.log('ajaxLoader'); // my log

	var ajaxLoader = {};

	// *****************************************************************
	// CUSTOMIZABLE VARS
	// *****************************************************************
	var	sTargetId = "ajax-content";
	var sViewKey = "view_as";
	var sAjaxClass = "ajax-nav";
	var sWorkClass = 'ajax-work';


	// *****************************************************************
	// MODULE VARS
	// *****************************************************************
	var	rSearch = /\?.*$/;
	var rHost = /^[^\?]*\?*&*/;
	var rView = new RegExp("&" + sViewKey + "\\=[^&]*|&*$", "i");
	var rEndQstMark = /\?$/;
	var oPageInfo = { title: null, url: location.href };
	var oHTTPStatus={100:"Continue",101:"Switching Protocols",102:"Processing",200:"OK",201:"Created",202:"Accepted",203:"Non-Authoritative Information",204:"No Content",205:"Reset Content",206:"Partial Content",207:"Multi-Status",208:"Already Reported",226:"IM Used",300:"Multiple Choices",301:"Moved Permanently",302:"Found",303:"See Other",304:"Not Modified",305:"Use Proxy",306:"Reserved",307:"Temporary Redirect",308:"Permanent Redirect",400:"Bad Request",401:"Unauthorized",402:"Payment Required",403:"Forbidden",404:"Not Found",405:"Method Not Allowed",406:"Not Acceptable",407:"Proxy Authentication Required",408:"Request Timeout",409:"Conflict",410:"Gone",411:"Length Required",412:"Precondition Failed",413:"Request Entity Too Large",414:"Request-URI Too Long",415:"Unsupported Media Type",416:"Requested Range Not Satisfiable",417:"Expectation Failed",422:"Unprocessable Entity",423:"Locked",424:"Failed Dependency",425:"Unassigned",426:"Upgrade Required",427:"Unassigned",428:"Precondition Required",429:"Too Many Requests",430:"Unassigned",431:"Request Header Fields Too Large",500:"Internal Server Error",501:"Not Implemented",502:"Bad Gateway",503:"Service Unavailable",504:"Gateway Timeout",505:"HTTP Version Not Supported",506:"Variant Also Negotiates (Experimental)",507:"Insufficient Storage",508:"Loop Detected",509:"Unassigned",510:"Not Extended",511:"Network Authentication Required"};
	var oReq;
	var bIsLoading = false;
	var bUpdateURL = false;

	// MESSAGE OBJ
	var vMsg;
	var vPageToLoad = '';

	// LOADING GIF VARS
	var bIsSpinning = false;
	var $loader = document.querySelector('section.loader');


	// *****************************************************************
	// LISTENERS & ACTIONS
	// *****************************************************************
	window.onpopstate = function (oEvent) {
		// console.log('window.onpopstate'); // my log
		bUpdateURL = false;
		oPageInfo.title =  oEvent.state.title;
		oPageInfo.url = oEvent.state.url;
		getPage();
	};

	window.addEventListener ? addEventListener("load", init, false) : window.attachEvent ? attachEvent("onload", init) : (onload = init);


	// *****************************************************************
	// PUBLIC METHODS
	// *****************************************************************
	ajaxLoader.completed = function() {
		closeSpinner();
	}


	// *****************************************************************
	// FUNCTIONS
	// *****************************************************************
	function closeReq () {
		// console.log('closeReq'); // my log
		bIsLoading = false;

		placePage();
	}

	function abortReq () {
		// console.log('abortReq'); // my log
		if (!bIsLoading) {
			return;
		}		
		oReq.abort();
		closeReq();
	}

	function ajaxError () {
		// console.log('ajaxError'); // my log
		alert("Unknown error.");
	}

	function ajaxLoad () {
		// console.log('ajaxLoad'); // my log
		var nStatus = this.status;
		switch (nStatus) {
			case 200:
				vMsg = JSON.parse(this.responseText);
				// document.title = oPageInfo.title = vMsg.page;
				// document.getElementById(sTargetId).innerHTML = vMsg.content;
				// if (bUpdateURL) {
				// 	history.pushState(oPageInfo, oPageInfo.title, oPageInfo.url);
				// 	bUpdateURL = false;
				// }
				break;
			default:
				ajaxError();
		}
		closeReq();
	}

	function filterURL (sURL, sViewMode) {
		// console.log('filterURL'); // my log
		return sURL.replace(rSearch, "") + ("?" + sURL.replace(rHost, "&").replace(rView, sViewMode ? "&" + sViewKey + "=" + sViewMode : "").slice(1)).replace(rEndQstMark, "");
	}

	function getPage (sPage) {
		// console.log('getPage'); // my log
		if (bIsLoading) {
			return;
		}
		
		oReq = new XMLHttpRequest();
		bIsLoading = true;
		oReq.onload = ajaxLoad;
		oReq.onerror = ajaxError;

		if (sPage) {
			oPageInfo.url = filterURL(sPage, null);
		}

		oReq.open("get", filterURL(oPageInfo.url, "json"), true);
		oReq.send();

		// SPINNER
		loadSpinner();
	}

	function requestPage (sURL) {
		// console.log('requestPage'); // my log
		if (history.pushState) {
			bUpdateURL = true;
			getPage(sURL);
		} else {
			/* Ajax navigation is not supported */
			location.assign(sURL);
		}
	}

	function processLink () {
		// console.log('processLink'); // my log
		if (this.className === sAjaxClass) {

			// insert page data-pageid variable
			vPageToLoad = this.getAttribute('data-pageid');

			requestPage(this.href);
			return false;
		}
		return true;
	}

	function init () {
		// console.log('init'); // my log
		oPageInfo.title = document.title;
		oPageInfo.url = filterURL(document.URL);
		history.pushState(oPageInfo, oPageInfo.title, oPageInfo.url);
		for (var oLink, nIdx = 0, nLen = document.links.length; nIdx < nLen; document.links[nIdx++].onclick = processLink);

		// preload spinner
		vPageToLoad = document.querySelector('section.content').getAttribute('data-pageid');
		// console.log(vPageToLoad);
		heroLoader.setup(vPageToLoad);
	}


	// *****************************************************************
	// SPINNER FUNCTIONS
	// *****************************************************************
	function loadSpinner() {
		oIsSpinning = true;
		$loader.style.display = 'block';

		TweenLite.to('.loader .cover', 0.5, {scale: 1, ease:Quad.easeOut, onComplete:midSpinner});
		TweenLite.to('.loader .spinner', 0.3, {opacity: 1, ease:Quad.easeOut});
	}

	function midSpinner() {
		window.scrollTo(0, 0);
		oIsSpinning = false;
		// SPINNER
		placePage();
	}

	function placePage() {
		if (!bIsLoading && !oIsSpinning) { // && heroLoader.loading == true
			document.title = oPageInfo.title = vMsg.page;
			document.getElementById(sTargetId).innerHTML = vMsg.content;
			if (bUpdateURL) {
				history.pushState(oPageInfo, oPageInfo.title, oPageInfo.url);
				bUpdateURL = false;
			}

			for (var oLink, nIdx = 0, nLen = document.links.length; nIdx < nLen; document.links[nIdx++].onclick = processLink);
			
			// console.log('ERROR REP: ' + vPageToLoad);

			// LOAD HEROES & SETUP PAGE
			heroLoader.setup(vPageToLoad);
		}
	}

	function closeSpinner() {
		TweenLite.to('.loader .cover', 0.5, {scale: 0, ease:Quad.easeOut, onComplete:postSpinner});
		TweenLite.to('.loader .spinner', 0.3, {opacity: 0, ease:Quad.easeOut});
	}

	function postSpinner() {
		$loader.style.display = 'none';
	}



	// RETURN
	return ajaxLoader;

})();
