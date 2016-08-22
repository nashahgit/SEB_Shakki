	  	$(document).ready(function () {
	  		

		  	window.onload = function() { 
		  		document.getElementById("hideAll").style.display = "none"; 
		  	}

		  	document.getElementById("hideAll").style.display = "block";

	  		$( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
		    	e.preventDefault();
		        $( this ).tab( 'show' );
		    } );

		    ( function( $ ) {
		        /* Test for making sure event are maintained */
		        fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
		    } )( jQuery );

	  		$(function(){
				var $window = $(window);		//Window object
				var scrollTime = 1;			//Scroll time
				var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
				
				$window.on("mousewheel DOMMouseScroll", function(event){
					
					event.preventDefault();	
													
					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);
						
					TweenMax.to($window, scrollTime, {
						scrollTo : { y: finalScroll, autoKill:true },
							ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
							autoKill: true,
							overwrite: 5							
						});
								
				});
				
			});
	  		/* Code for showing the small owl on scroll  */
	  		$(function(){
  				$(window).scroll(function(){
	    			var aTop = $('#header').height();
	    			if($(this).scrollTop()>=aTop){
	        			$(".small-owl").fadeIn('slow');
	    			}
	    			else {
	    				$(".small-owl").fadeOut('slow');
	    			}
  				});
			});
			/* code for hiding the top nav bar when reached the bottom */
	  		window.onscroll = function(ev) {
			    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			    	$('.navbar').fadeOut('slow');
			    }
			    else {
			    	$('.navbar').fadeIn('slow');
			    }
			};


			/* code for red scroll up button */
			$(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });

		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });


		    switchIn = function () {
			    $('.seminar').fadeToggle(function() {
			        $('.conference').fadeToggle(function() {
			            setTimeout(function() {switchOut();}, 3500);
			        });
			    });
			    
			}

			switchOut = function () {
			    $('.conference').fadeToggle(function() {
			        $('.seminar').fadeToggle(function() {
			            setTimeout(function() {switchIn();}, 3500);
			        });
			    });

			}

			setTimeout(function() {switchIn();}, 3500);

		});
