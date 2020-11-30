jQuery(function ($) {
    'use strict';
	
        // Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.navbar-area').addClass("is-sticky");
            }
            else{
                $('.navbar-area').removeClass("is-sticky");
            }
		});

		// Mean Menu
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
        });
		
		// Others Option For Responsive JS
		$(".others-option-for-responsive .dot-menu").on("click", function(){
			$(".others-option-for-responsive .container .container").toggleClass("active");
        });
        
        // Button Hover JS
		$('.default-btn')
		.on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
		})
		.on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
		});

		// Nice Select JS
		$('select').niceSelect();

		// Newsletter Modal JS
		$('#newsletter-modal').modal({
			show: true
		});
		
		// Home Slides
		$('.home-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 100,
			autoplay: false,
            navText: [
                "<i class='flaticon-left-arrow'></i>",
                "<i class='flaticon-right-arrow'></i>"
            ],
		});
        $(".home-slides").on("translate.owl.carousel", function(){
            $(".main-slider-content b").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content a").removeClass("animated fadeInUp").css("opacity", "0");
		});
        $(".home-slides").on("translated.owl.carousel", function(){
            $(".main-slider-content b").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content a").addClass("animated fadeInUp").css("opacity", "1");
		});
		
		// Home Slides Two
		$('.home-slides-two').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 100,
			autoplay: false,
		});
		$(".home-slides-two").on("translate.owl.carousel", function(){
            $(".main-slider-content b").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slider-content a").removeClass("animated fadeInUp").css("opacity", "0");
		});
        $(".home-slides-two").on("translated.owl.carousel", function(){
            $(".main-slider-content b").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slider-content a").addClass("animated fadeInUp").css("opacity", "1");
		});
		
        // Partner Slider
		$('.partner-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			smartSpeed: 500,
			margin: 30,
			autoplayHoverPause: true,
            autoplay: true,
			responsive: {
				0: {
					items: 2
				},
				576: {
					items: 2
				},
				768: {
					items: 3
				},
				1024: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		});

		// Products Details Image Slides
		$('.products-details-image-slides').slick({
			dots: true,
			speed: 500,
			fade: false,
			slide: 'li',
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 4000,
			prevArrow: false,
    		nextArrow: false,
			responsive: [{
				breakpoint: 800,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '40px',
					variableWidth: false,
					slidesToShow: 1,
					dots: true
				},
				breakpoint: 1200,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '40px',
					variableWidth: false,
					slidesToShow: 1,
					dots: true
				}
			}],
			customPaging: function (slider, i) {
				return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
			}
		});
		
		// Testimonial Slides
		$('.testimonial-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 100,
			autoplay: false,
            navText: [
                "<i class='flaticon-left-arrow'></i>",
                "<i class='flaticon-right-arrow'></i>"
            ],
		});

		// Main Products Image Slides
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			arrows: false,
			focusOnSelect: true,
			verticalSwiping: true,
			vertical: true
		});
		$('a[data-slide]').on('click', function(e) {
			e.preventDefault();
			var slideno = $(this).data('slide');
			$('.slider-nav').slick('slickGoTo', slideno - 1);
		});
		
		// Tabs
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});

		// Count Time 
		function makeTimer() {
			var endTime = new Date("September 20, 2022 17:00:00 PDT");			
			var endTime = (Date.parse(endTime)) / 1000;
			var now = new Date();
			var now = (Date.parse(now) / 1000);
			var timeLeft = endTime - now;
			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }
			$("#days").html(days + "<span>Days</span>");
			$("#hours").html(hours + "<span>Hours</span>");
			$("#minutes").html(minutes + "<span>Minutes</span>");
			$("#seconds").html(seconds + "<span>Seconds</span>");
		}
		setInterval(function() { makeTimer(); }, 0);

		// Products Filter Options
        $(".icon-view-two").on("click", function(e){
			e.preventDefault();
			document.getElementById("products-collections-filter").classList.add('products-col-two')
			document.getElementById("products-collections-filter").classList.remove('products-col-one', 'products-col-three', 'products-col-four', 'products-row-view');
		});
		$(".icon-view-three").on("click", function(e){
			e.preventDefault();
			document.getElementById("products-collections-filter").classList.add('products-col-three')
			document.getElementById("products-collections-filter").classList.remove('products-col-one', 'products-col-two', 'products-col-four', 'products-row-view');
		});
        $('.products-filter-options .view-column a').on('click', function(){
            $('.view-column a').removeClass("active");
            $(this).addClass("active");
		});
		
		// Range Slider
        $( "#range-slider" ).slider({
			range: true,
			min: 50,
			max: 400,
			values: [50, 400],
			slide: function( event, ui ) {
				$( "#price-amount" ).val( "$" + ui.values[ 0 ] + "-$" + ui.values[ 1 ] );
			}
		});
		$( "#price-amount" ).val( "$" + $( "#range-slider" ).slider( "values", 0 ) +
		" - $" + $( "#range-slider" ).slider( "values", 1 ) );  

		// Popup Video
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// FAQ Accordion
		$('.accordion').find('.accordion-title').on('click', function(){
			$(this).toggleClass('active');
			$(this).next().slideToggle('fast')
			$('.accordion-content').not($(this).next()).slideUp('fast');
			$('.accordion-title').not($(this)).removeClass('active');		
		});

		// Odometer JS
        $('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		
		// Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			}
			else {
				event.preventDefault();
			}
		});
		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} 
			else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}

		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", 

			callback: callbackFunction
		});

		// Input Plus & Minus Number JS
        $('.input-counter').each(function() {
            var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'),
            btnDown = spinner.find('.minus-btn'),
            min = input.attr('min'),
            max = input.attr('max');
            
            btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
				} 
				else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
            btnDown.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
				} 
				else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
		});
		
        // Go to Top JS
		$(window).on('scroll', function() {
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.go-top').addClass('active');
			if (scrolled < 600) $('.go-top').removeClass('active');
		});  
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});
		
		// Preloader
		jQuery(window).on('load', function() {
			$('.preloader').fadeOut()
		})

}(jQuery));