jQuery(document).ready(function($){

	// site preloader
	$(window).load(function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});



	// this code is for hero-area full-screen

	$(window).bind('resizeEnd', function () {
		$(".hero-area, .fullscreen-bg, .index-three .hero-area-text-section, .index-six #particles-js").height($(window).height());
	});
	$(window).resize(function () {
		if (this.resizeTO) clearTimeout(this.resizeTO);
		this.resizeTO = setTimeout(function () {
			$(this).trigger('resizeEnd');
		}, 300);
	}).trigger("resize");


	// this code is for owl-carousel === client-logo-area

	$('.client-logo-area-all').owlCarousel({
	    loop:true,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
		responsive:{
	        1200:{
	            items:6
	        },
	        992:{
	            items:5
	        },
	        768:{
	            items:4
	        },
	        400:{
	            items:3
	        },
	        300:{
	            items:2
	        }
	    }
	});

	// this code is for owl-carousel === acknowledge-area

	$('.acknowledge-area-owl-carousel').owlCarousel({
        center: true,
		loop:true,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsiveClass:true,
        responsive:{
            1200:{
                items:3
            },
            992:{
                items:3
            },
            768:{
                items:2,
				center: false,
            },
            400:{
                items:1
            },
            300:{
                items:1
            }
        }
	});


	// this code is for owl-carousel === our-work-area


	$('.our-work-area-carousel-slide').owlCarousel({
	    loop:true,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	    responsiveClass:true,
		responsive:{
	        1200:{
	            items:4
	        },
	        992:{
	            items:3
	        },
	        768:{
	            items:3
	        },
	        400:{
	            items:2
	        },
	        300:{
	            items:1
	        }
	    }
	});



	//For counting
	$('.counrer-up-content-single span').counterUp({
        delay: 10,
        time: 1000
    });

	//For parallax background
	$('.parallax-bg').scrolly({bgParallax: true});

    //For instagram images
    var userFeed = new Instafeed({
        get: 'user',
        limit: "12",
        userId: 11175379,
        accessToken: '11175379.467ede5.f5ec3337edc941678b80d5eac0310213',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>'
    });
    userFeed.run();


	//this code is for scroll to top
    $(".scroll-top").click(function(e){
        $("html,body").animate({scrollTop:0},3000);
		e.preventDefault();
    });


	//this code is for barfillar

	$('#bar1').barfiller();

	$('#bar2').barfiller();

	$('#bar3').barfiller();

    $('#bar4').barfiller();

	$('#bar5').barfiller();

	$('#bar6').barfiller();

	// venobox
	if( $.fn.venobox ){
		$('.zoomImage').venobox();
	}


    //this code is for sticky-menu

	$(".logo-menu-section").sticky({topSpacing:0});

    //this code is for smooth-scroll

    $('.navbar-nav li a, .scroll-to-bottom a').on('click', function(event) {
        var $anchor = $($(this).attr('href')).offset().top - 85;
        $('body, html').animate({scrollTop : $anchor}, 600);
        return false;
        event.preventDefault();
    });

    //For bootstrap scrollspy
	$("body").scrollspy({
		target: ".navbar-collapse",
		offset: 160
	});


	//For mobile menu by bootstrap
	$("ul.nav.navbar-nav li a").click(function(){
	   $ (".navbar-collapse").removeClass("in");
	});


	setupRotator();



	function setupRotator() {
	  if ($('.textItem').length > 1) {
	    $('.textItem:first').addClass('current').fadeIn(1000);
	    setInterval(textRotate(), 1000);
	  }
	}

	function textRotate() {
	  var current = $('#quotes > .current');
	  if (current.next().length == 0) {
	    current.removeClass('current').fadeOut(1000);
	    $('.textItem:first').addClass('current').fadeIn(1000);
	  } else {
	    current.removeClass('current').fadeOut(1000);
	    current.next().addClass('current').fadeIn(1000);
	  }
	}

});
