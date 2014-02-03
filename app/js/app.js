var app = (function() {

	'use strict';
	var privateVariable = 'app fired!',
		docElem = document.documentElement;

	return {
		publicFunction: function() {
			console.log(privateVariable);
		},
		userAgentInit: function() {
			docElem.setAttribute('data-useragent', navigator.userAgent);
		}
	};

})();

(function() {

	'use strict';

	//foundation init
	$(document).foundation();

	app.publicFunction();
	app.userAgentInit();

})();


$(function(){

	var Homepage_TopNav = function() {
		// var contactBtn = $("#topnav li.contactDiv, #topnav2 li.contactDiv");
		// var contactDiv = $("#contactDiv");
		// function closeAllDivs() {
		// 	$(contactDiv).slideUp(0,null);
		// 	$(contactBtn).removeClass("active");
		// }
		// $(contactBtn).click(function() {
		// 	console.log("contactBtn click");
		// 	var wasActive = false;
		// 	// console.log( "this: " + $(this).attr('class') );
		// 	if( $(this).hasClass("active") ) {
		// 		wasActive = true;
		// 	}
		// 	closeAllDivs();
		// 	if( wasActive == false ) {
		// 		var div = "#" + $(this).attr('class');
		// 		console.log("div: " + div);
		// 		$( div ).slideDown(0,null);
		// 		if( $(this).hasClass("contactDiv") ) {
		// 			$(contactBtn).addClass("active");
		// 		}
		// 	}
		// });
		// console.log("topnav closure finished.");
		$('body').addClass('navIsHidden');
		$('#topnav .menuButton').click(function(e) {
			e.preventDefault();
			if( $('body').hasClass('navIsActive') ) {
				$('body').removeClass('navIsActive').addClass('navIsHidden');
			} else {
				$('body').removeClass('navIsHidden').addClass('navIsActive');
			}
		})
	}();

	// console.log("End of global.js closure reached.");    
});

// Google Analytics Outbound Links 
	function trackOutboundLink(link, category, action) { 
		console.log("trackOutboundLink: " + category + ", " + action)
		try { 
			_gaq.push(['_trackEvent', category , action]); 
		} catch(err){
			// console.log("err: " + err)
		}
		if(link.href) {
			setTimeout(function() {
				if(link.target == "_blank") {
					window.open(link.href, '_blank');					
				} else {
					document.location.href = link.href;
				}
			}, 100);
		}
	}
	// Usage:
	// onClick="trackOutboundLink(this,'Homepage Slideshow','Slide 1'); return false;"

	// Reference:
	// https://support.google.com/analytics/answer/1136920?hl=en

console.log("starting ga...");
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9707382-1']);
  _gaq.push(['_setDomainName', 'meringcarson.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


