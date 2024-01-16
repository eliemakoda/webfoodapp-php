// JavaScript Document
$(document).ready(function() {

    'use strict';

    /************************************************************************************ CAROUSEL SLIDER STARTS */

    var owl = $('.menu-carousel');
    owl.owlCarousel({

        autoplay: false,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        mouseDrag: true,
        smartSpeed: 500,
        margin: 0,
        loop: true,
        singleItem: true,
        navText: [
            "<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    var owl = $('.testimonial-carousel');
    owl.owlCarousel({

        autoplay: false,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        mouseDrag: true,
        smartSpeed: 500,
        margin: 0,
        loop: true,
        singleItem: true,
        navText: [
            "<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    var owl = $('.pics-carousel');
    owl.owlCarousel({

        autoplay: 500,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        mouseDrag: true,
        smartSpeed: 500,
        margin: 0,
        loop: true,
        singleItem: true,
        navText: [
            "<i class='fa fa-angle-right'></i>", "<i class='fa fa-angle-left'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /************************************************************************************ CAROUSEL SLIDER ENDS */
	
	/************************************************************************************ PAGE ANIMATED ITEMS STARTS */

    $('.animated').appear(function () {
        var elem = $(this);
        var animation = elem.data('animation');
        if (!elem.hasClass('visible')) {
            var animationDelay = elem.data('animation-delay');
            if (animationDelay) {

                setTimeout(function () {
                    elem.addClass(animation + " visible");
                }, animationDelay);

            } else {
                elem.addClass(animation + " visible");
            }
        }
    });

	/************************************************************************************ PAGE ANIMATED ITEMS ENDS */
	
	/************************************************************************************ ONEPAGE NAV STARTS */

    $('.nav').onePageNav({
        filter: ':not(.external)',
        begin: function() {
            console.log('start')
        },
        end: function() {
            console.log('stop')
        }
    });
	
	/************************************************************************************ ONEPAGE NAV ENDS */
	
	/************************************************************************************ DATE PICKER STARTS */

    $(function() {
        $("#datepicker").datepicker();
    });
	
	/************************************************************************************ DATE PICKER ENDS */

    /************************************************************************************ TO TOP STARTS */

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
   
    /************************************************************************************ TO TOP ENDS */
	
    /************************************************************************************ PARALLAX STARTS */

    $('.parallax-1').parallax("50%", 0.5);
    $('.parallax-2').parallax("50%", 0.1);
    $('.parallax-3').parallax("50%", 0.5);
    $('.parallax-4').parallax("50%", 0.1);
    $('.parallax-5').parallax("50%", 0.1);
    $('.parallax-6').parallax("50%", 0.1);
    $('.b-img-01').parallax("50%", 0.1);
    $('.b-img-02').parallax("50%", 0.1);
    $('.b-img-03').parallax("50%", 0.1);
    $('.b-img-04').parallax("50%", 0.1);
    $('.b-img-05').parallax("50%", 0.1);
    $('.b-img-06').parallax("50%", 0.1);
    $('.b-img-07').parallax("50%", 0.1);
    $('.b-img-08').parallax("50%", 0.1);
    $('.b-img-09').parallax("50%", 0.1);
    $('.b-img-10').parallax("50%", 0.1);
    $('.b-img-11').parallax("50%", 0.1);
    $('.b-img-12').parallax("50%", 0.1);
    $('.b-img-13').parallax("50%", 0.1);
    $('.b-img-14').parallax("50%", 0.1);
    $('.b-img-15').parallax("50%", 0.1);


    /************************************************************************************ PARALLAX ENDS */

    /************************************************************************************ FITVID STARTS */

    $(".fitvid").fitVids();

    /************************************************************************************ FITVID ENDS */


    /************************************************************************************ DROPDOWN MENU STARTS */

    $('.dropdown-toggle').dropdown();

    $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation()
    })

    /************************************************************************************ DROPDOWN MENU ENDS */

});

/************************************************************************************ STICKY NAV STARTS */

$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        $('nav.fill-black').addClass("sticky");
        $('nav.fill-black').removeClass("normal");
    } else {
        $('nav.fill-black').removeClass("sticky");
        $('nav.fill-black').addClass("normal");
    }
});

/************************************************************************************ STICKY NAV ENDS */

/************************************************************************************ PRELOADER STARTS */

$(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
});

/************************************************************************************ PRELOADER ENDS */

/************************************************************************************ MAGNIFIC POPUP STARTS */

$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    /*disableOn: 700,*/
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});

$('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
        verticalFit: true
    }

});

/************************************************************************************ MAGNIFIC POPUP ENDS */