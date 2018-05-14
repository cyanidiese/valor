$(function(){
	
	$('.to_top_btn').click(function(e){
		
		e.preventDefault();
		
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	});
	
	var get_time = function() {

        var time = moment().tz('America/New_York').format('hh:mm');
        $('#current_time').html(time);
				
		setTimeout(get_time, 5000);
	};
	
	$('#mobile_menu_btn').click(function(e){
		
		e.preventDefault();
		e.stopPropagation();
		
		if (!$(this).hasClass('open')) {
			$(this).addClass('open');
			$('.head_menu').show();
		} else {
			$(this).removeClass('open');
			$('.head_menu').hide();
		}
		
	});
	
	get_time();

	
	if ($("#slider").length > 0) {
		
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 3000,
			maxwidth: 5000,
			timeout: 4000,
			namespace: "centered-btns"
		});
		
		showBanner();
		
	}
	
	$('#banner .banner_close').click(function(e){
		
		e.preventDefault();
		e.stopPropagation();
		
		$.cookie('valor_banner', 1);
		
		$('#banner').addClass('hide');
		
	});
	
	$('#banner .banner_link').click(function(e){
		
		e.preventDefault();
		e.stopPropagation();
		
		$.cookie('valor_banner', 1);
		
		$('#banner').addClass('hide');
		
		location.href = '/';
		
		
	});
	
});

function showBanner() {
	
	if ($(window).width() >= 960) {
		
		if (typeof($.cookie('valor_banner')) == 'undefined') {
			$('#banner').removeClass('hide');
		}
		
	} else {
		
		$('#banner').addClass('hide');
		
	}
	
}

$(window).resize(function(e) {
	
	if ($("#slider").length > 0) {
		showBanner();
	}
	
});

