jQuery(document).ready(function($) {
	/* 
	 * Header Bar
	 */
	function setHeader() {
		if($(window).scrollTop() > 100) {
			$(".header-bar, .main-nav, .nav-search").addClass('scrolled');
		} else {
			$(".header-bar, .main-nav, .nav-search").removeClass('scrolled');
		}
	}
	$(window).on('resize', function() {
		setHeader();
	});
	$(document).on('scroll', function() {
		setHeader();
	});
	setHeader();
	
	
	$('#main-nav-toggle').on('click', function(event){
		event.preventDefault();
		if ($(".menu-bar").hasClass("show")) {
			$("#main-nav-toggle").removeClass("active");
			$(".menu-bar").removeClass("show");
		} else {
			$("#main-nav-toggle").addClass("active");
			$(".menu-bar").addClass("show");	
		}
	});
	
	$(document).click(function (e) {
		var container = $(".menu-bar, .#main-nav-toggle");
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			if ($(".menu-bar").hasClass("show")) {
				$(".menu-bar").removeClass("show");
				$("#main-nav-toggle").removeClass("active");
			}
		}
	});
	
	$(".main-banner").owlCarousel({
		items: 1,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop: true,
		margin: 0,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		rewind: false,
		dots: false,
		lazyLoad: true,
		lazyLoadEager: true,
		autoplay: true,
		autoplayTimeout: 10000,
		autoplayHoverPause: false,
		responsiveRefreshRate: 0
	});
});