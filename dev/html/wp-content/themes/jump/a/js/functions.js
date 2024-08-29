
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Nav Toggle
		-------------------------------------------*/

		// Notes...

		$('.global-nav').find('.nav-toggle').click(function(){

			$(this).toggleClass('active').next().slideToggle('fast');

		});


		/*-------------------------------------------
			Typical Projects
		-------------------------------------------*/

		// Notes...


		// Add a class of "active" to the first tab, for styling...

		$('.project-listing .tabs').find('li').first().addClass('active');

		$('.project-listing .tabs').find('li').click(function() {

			// First remove class "active" from currently active tab

			$(this).addClass('active').siblings().removeClass('active');

			// Hide all tab content

			$('.project-listing .listings').find('li').hide();

			// Get href value of the selected tab

			var selected_tab = $(this).find('a').attr('href');

			// Show the selected tab content

			$(selected_tab).show();

			// At the end, we add return false

			return false;

		});


		/*-------------------------------------------
			Career Options
		-------------------------------------------*/

		// Notes...


		// Add a class of "active" to the first tab, for styling...

		$('.career-options .tabs').find('li').first().addClass('active');

		$('.career-options .tabs').find('li').click(function() {

			// First remove class "active" from currently active tab

			$(this).addClass('active').siblings().removeClass('active');

			// Hide all tab content

			$('.career-options .panels').find('.panel').hide();

			// Get href value of the selected tab

			var selected_tab = $(this).find('a').attr('href');

			// Show the selected tab content

			$(selected_tab).show();

			// At the end, we add return false

			return false;

		});


		/*-------------------------------------------
			Scroll to Comments
		-------------------------------------------*/

		// Notes...


		$('.share-options .comment a').smoothScroll({

			offset: -20

		});


		/*-------------------------------------------
			Add Print Option for Post
		-------------------------------------------*/

		// Notes...


		$('.share-options .wrap ul').append('<li class="print"><a href="#print">Print</a></li>');

		$('.share-options .print a').click(function() {

			window.print();

			return false;

		});


		/*-------------------------------------------
			Open External Links in New Window
		-------------------------------------------*/

		// Notes...


		$('a[rel="external"]').click( function() {

			window.open( $(this).attr('href') );

			return false;

		});


		/*-------------------------------------------
			Sample Smooth Scroll Structure
		-------------------------------------------*/

		// Notes...


		// $('.answers .top a').smoothScroll({

			// offset: -20

		// });


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $("#footer").after('<div id="dev"></div>');

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Slideshow
		-------------------------------------------*/

		// Notes...


		$(".flexslider").flexslider({

			animation: "fade",
			slideshowSpeed: 7000,
			useCSS: false,
			controlNav: true,
			directionNav: true,
			start: function(slider){

				$("body").removeClass("loading");

			}

		});


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


})(window.jQuery);