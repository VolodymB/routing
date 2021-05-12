$(document).ready(function(){

	// Owl Carousel
	$('.owl-carousel').owlCarousel({
	items: 1,
	loop: true,
	nav: true,
	dots: true,
	slideBy: 1
	});


	// Slider Items (popular)
	$('.slider-items').slick({
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '.control-item_prev',
		nextArrow: '.control-item_next',
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});


	// Material Text Lenght
	$(".material-descr").text(function(i, text) {
		if (text.length >= 170) {
			text = text.substring(0, 170);
			var lastIndex = text.lastIndexOf(" ");
			text = text.substring(0, lastIndex) + '...';
		} 
	$(this).text(text);
	});


	// Navbar Fixed
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 250) {
			$('#navbar').addClass('navbar-fix_show');
		}
		else{
			$('#navbar').removeClass('navbar-fix_show');
		}
	});


	// Scroll2top
	$("body").append('<span class="scroll2top"><span>').children('.scroll2top').hide();
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 250) {
			$(".scroll2top").fadeIn(100);
		} 
		else{
			$(".scroll2top").fadeOut(100);
		}
	});

	$(".scroll2top").click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 350);
	});


	// Open/Close Mobile Menu
	$('.burger').on('click', function() {
		$(this).toggleClass('burger-open');
		$('#navbar').toggleClass('mobile-open');
		$('.navbar-nav-wrap').toggleClass('navbar-nav-wrap_bg');
	});

	$('.navbar-nav-item').on('click', function() {
		$(this).toggleClass('navbar-nav-item_open');
	});


	// Call Popup
	$('.popup-bttn').magnificPopup({
	});


	// Label in Modal Popup
	$('.form-item').find('.input_modal').on('keyup blur focus', function (e) {
	var $this = $(this),
			label = $this.next('.input_label-modal');

		if (e.type === 'keyup') {
			if ($this.val() === '') {
					label.removeClass('input_label-modal_active');
				} else {
					label.addClass('input_label-modal_active');
				}
		} else if (e.type === 'blur') {
			if( $this.val() !== '' ) {
				label.addClass('input_label-modal_active'); 
			} else {
				label.removeClass('input_label-modal_active');   
			}   
		} else if (e.type === 'focus') {
			
			if( $this.val() === '' ) {
				label.addClass('input_label-modal_active'); 
			} 
			else if( $this.val() !== '' ) {
				label.addClass('input_label-modal_active');
			}
		}
	});

	
	// Submit Validation
	$('.form-item').find('.bttn_send').on('click', function() {
	var $input = $('.form-item').find('.input_modal');

		if ($input.val() !== '') {
			$input.removeClass('input_modal-error').val('');
			$('#callback-form').submit();
		}
		else {
			$input.addClass('input_modal-error');
		}
	});


	// Show/Hide Coment Form
	$('.bttn_coment-add').on('click', function() {
		$('.bttn_coment-add,.coments-content').hide();		
		$('.bttn_coment-back,.coments-form').show();
	});

	$('.bttn_coment-back').on('click', function() {
		$('.bttn_coment-add,.coments-content').show();		
		$('.bttn_coment-back,.coments-form').hide();
	});


	// Show Order Form
	$('.bttn_order-add').on('click', function() {
		$(this).parent().hide();
		$(this).parent().parent().find(".cart-total-head").css("margin-bottom","0");
		$('.order-form').show();
	});

	// Input Modal Textarea
	var input = $('#input_textarea');
	input.on('keydown', function(){
		var el = this;
		setTimeout(function(){
			el.style.cssText = 'height:auto; padding:9px 0';
			el.style.cssText = 'height:' + el.scrollHeight + 'px';
		}, 0);
	});


	// Photo gallery Item card
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Загрузка #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
	});


	// Trigger to Big photo
	$(".item-photo").on("click", function() {
		$(this).next().children(":first-child").children().trigger("click");
	})


	$('.cloth-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Загрузка #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
	});


	// Show/Hide Filter Moble
	$('.bttn_filter').on('click', function() {
		$('#main-filter').slideToggle();
		$("html, body").animate({
			scrollTop: $("#main-filter").offset().top - 80
		}, 300);
		$(this).children().toggleClass('hidden');
	});


	// jQuery Quantity in Cart
	$(".input_minus").click(function(e) {
		e.preventDefault();
		var $input = $(this).parent().find("input");
		var count = parseInt($input.val()) - 1;

		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
	});

	$('.input_plus').click(function(e) {
		e.preventDefault();
		var $input = $(this).parent().find("input");
		var count = parseInt($input.val()) + 1;

		$input.val(count);
		$input.change();
	});

	// Quantity in Cart Type Numbers Only
	$('.input_count').on('keyup', function(e) {
		$(this).val($(this).val().replace(/[^0-9]/g, ''));		
	});

});//end