$(document).on('ready', function () {
    
    "use strict";
    
    var win = $(window);
            
  
    win.on("scroll", function () {
      var wScrollTop  = $(window).scrollTop();    
        
        if (wScrollTop > 150) {
            $("#main-header").addClass("header-colored");
        } else {
            $("#main-header").removeClass("header-colored");
        }
    });

     /* Bootstrap Scroll Spy */
       
    $("body").scrollspy({
        target: ".navbar-collapse",
        offset: 70
    });
    
     /* Collapse navigation on click on nav anchor in Mobile */
       
    $(".nav a").on('click', function () {
        $("#myNavbar").removeClass("in").addClass("collapse");
    });

     /* navbar Scroll */
    $(".navbar-nav li a, .welcome-area a, .btn-1, .btn-3").on("click", function (e) {
        var hook = $(this);
        $("html, body").stop().animate({
            scrollTop: $(hook.attr("href")).offset().top - 60
        }, 1000);
        e.preventDefault();
    });
	
	 $(".intro .btn-1").on("click", function (e) {
        var hook = $(this);
        $("html, body").stop().animate({
            
            scrollTop: $(hook.attr("href")).offset().top
        }, 1000);
        e.preventDefault();
    });
	
   /* projects section */
   var  scrollButton = $('#scroll-top');
    
    
    /* Caching The Scroll Top Button  */
    
    win.on('scroll', function () {
        if ($(this).scrollTop() >= 700) {
            
            scrollButton.show();
            
        } else {
            
            scrollButton.hide();
        }
        
    });
	
    
    /* Click On Button To Scroll Top */
    
    scrollButton.on('click', function () {
        
        $('html,body').animate({ scrollTop : 0 }, 1100);
        
    });
	 
	
	/* tabs in how-work section */
	$('.features ul li').on('click', function(){
		var myID = $(this).attr('id');
		$(this).addClass('active').siblings().removeClass('active');
		
		$('#' + myID + '-content').fadeIn(700).siblings().hide();
	});
	
	// swiper slider for carousel page
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
        effect: 'fade',
		speed: 500
    });
	 
	/* team-area slider */
    $('.team-area .owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 50,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 650,
        responsiveClass:true,
        responsive : {
			1200 : {
                items: 4
            },
            992 : {
                items: 3
            },
    
            768 : {
                items: 2
            },
            
            0 : {
                items: 1
            }
        }
        
    });
	
	/* testimonials slider */
	$('.testimonials .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2800,
        autoplayHoverPause: true,
        smartSpeed: 650,
    });
	
	/* blog-area slider */
	$('.blog-area .owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 50,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 650,
        responsiveClass:true,
        responsive : {
            992 : {
                items: 3
            },
    
            768 : {
                items: 2
            },
            
            0 : {
                items: 1
            }
        }
        
    });

    $('.counter').counterUp({
        delay: 50,
        time: 2500
    });
	
	/*  skills-area section  */
 
    win.on('scroll', function () {
        $(".skills-progress span").each(function () {
            var bottom_of_object = 
            $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = 
            $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                $(this).css({
                  width : myVal
                });
            }
        });
    });
	
	
	
	/* contact-area section */
    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });
    
});



$(window).on("load",function (){
     
        $('.load-wrapp ').fadeOut(100);

    // isotope
    $('.grid').isotope({
      // options
      itemSelector: '.items'
    });

    var $grid = $('.grid').isotope({
      // options
    });

    // filter items on button click
    $('.filtering').on( 'click', 'span', function() {

        var filterValue = $(this).attr('data-filter');

        $grid.isotope({ filter: filterValue });

    });

    $('.filtering').on( 'click', 'span', function() {

        $(this).addClass('active').siblings().removeClass('active');

    });

    

});