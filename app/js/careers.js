  $(function(){
//    $(document).foundationAlerts();
//    $(document).foundationButtons();
//    $(document).foundationAccordion();
//    $(document).foundationNavigation();
//    $(document).foundationCustomForms();
//    $(document).foundationMediaQueryViewer();
//    $(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});
    
//    $(document).tooltips();
//    $('input, textarea').placeholder();
    
    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});
    
    //alert("careers.js");
    
    var SideNav = function() {
    	// Find all job items, build a side nav that shows one at a time.
		//alert("sideNav closure");

		if( $("html").hasClass("lt-ie8") ) {
			//alert("lt-ie8: don't make combobox.");
			// Don't make combobox in IE7, because it doesn't work.
		} else {
			//alert("building combobox");
	    	// Find all job items
	    	var jobsDiv = $(".container .career");
	    	var jobs = $('.container .career > div');
			//var sideNavDiv = $("#careersPage ul.side-nav");
			var newJobs = "";
			var nav = "";
	
			// Build sidenav string
			var nav = '<dl class="tabs pill hide-for-small">';
			// Build nav for small devices (html combo box)
			var navSmall = '<select class="show-for-small" style="padding:6px 0">';
			var newJobs = '<div style="clear:both; padding-top:20px;"><ul class="tabs-content">';
			$(jobs).each(function(index, value) {
				var name = $(value).find("h3").text();
				// Add nav
				nav += '<dd><a href="#' + cleanString(name) + '">';
				nav += name;
				nav += '</a></dd>';
				// Add navSmall
				navSmall += '<option value="#' + cleanString(name) + '">' + name + '</option>';
				// Add job
				newJobs += '<li id="' + cleanString(name) + 'Tab">' + $(value).html() + '</li>'; 
			});
			nav += '</dl>';
			navSmall += '</select>';
			newJobs += '</ul></div>';
	
			// Add everything
			$(jobsDiv).html(nav + navSmall + newJobs);
			nav = $(jobsDiv).find("dl.tabs");
			navSmall = $(jobsDiv).find("select");
			
			// Only use small nav
			$(nav).removeClass('hide-for-small');
			$(nav).attr('style', 'display:none;');
			$(navSmall).removeClass('show-for-small');
			//
			
			//$(nav).find("ul.tabs-content > li:first").addClass("active");
			// Init navSmall
			//$(navSmall).val(1);
	
			// We still need the listeners because we're using the foundation tabs to control the page.
			// Combobox listener
			$(navSmall).change(function() {
				//alert("combobox listener");
				var value = $(navSmall).val();
				//alert("combobox listener: value: " + value + ", ");
				$(nav).find('dd a[href="' + value + '"]').trigger("click");
			});
	
			// Tabs listener
			$(nav).find("a").click(function() {
				//alert("tabs listener");
				var value = $(this).attr("href");
				//alert("tabs listener: value: " + value + ", navSmall current value: " + $(navSmall).val() );
				$(navSmall).val(value);
			});
	
			// Init tabs
			// $(document).foundationTabs();
	
			// Init nav
			$(nav).find("dd:first a").trigger("click");
			
			//$(jobs).hide();
		}
		
		function cleanString(a) {
			var a_original = a;
			// remove <br>
			a = a.split("<br>");
			a = a.join(" ");
			// remove spaces
			a = a.split(" ");
			a = a.join("");
			// remove tabs
			a = a.split("	");
			a = a.join("");
			// remove "/"
			a = a.split("/");
			a = a.join("-");
			// remove "."
			a = a.split(".");
			a = a.join("-");
			// remove "()"
			a = a.split("(");
			a = a.join("-");
			a = a.split(")");
			a = a.join("-");
			console.log('cleanString: start: "' + a_original + '", end: "' + a + '".');
			return a;    	
		}
		
    	console.log("End of SideNav closure reached.");
    	
    }();
    console.log("End of careers.js closure reached.");
  });
  