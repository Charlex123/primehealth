
$(document).ready(function(){
		
	$(".mobile-slide button").click(function() {
		$(".mobile-nav-content").toggleClass("main");
		/*$('body').addClass("menu-overlay");*/
		$('.mdl-layout__obfuscator').addClass('show-box');
		
		
	});
 
	$(".mdl-layout__obfuscator").click(function() {
		 $(".mobile-nav-content").removeClass("main");
		/*$('body').removeClass("menu-overlay");*/
		$('.mdl-layout__obfuscator').removeClass('show-box');
	});
 
	$('.mob-nav-item').on('click',function(){
		if($(this).hasClass('open')) {
			$(this).removeClass('open');
			$(this).find('.mob-arrow').removeClass('fa-angle-up');
			$(this).find('.mob-arrow').addClass('fa-angle-down');
			$(this).find('.sub-menu').hide();
		} else {
			$(this).addClass('open');
			$(this).find('.mob-arrow').addClass('fa-angle-up');
			$(this).find('.mob-arrow').removeClass('fa-angle-down');
			$(this).find('.sub-menu').show();
		}
	});

	$('.bellows-subtoggle').click(function(event){
		event.preventDefault();
	});
	
	$('.faq-content button').click(function(){
		
	
		
		
		//$(this).toggleClass('active');
		if($(this).hasClass( "active" )){
			
			$( ".faq-content button" ).each(function() {
$(this).removeClass('active');
//alert(1);
//
});
			
		}else{$(this).addClass('active');}
		
		
		

	});
	
	
	$(window).scroll(function(){var m1 = $(window).width()
  var sticky = $('.mobile-slide'),
      scroll = $(window).scrollTop();

  if (scroll >=50) {sticky.addClass('fixed1');sticky.addClass('fixed');  if(m1 < 768){	  $('#search-box').addClass('fixed-wr');    }else	  $('#search-box').removeClass('fixed-wr');  }
  else {sticky.removeClass('fixed');  $('#search-box').removeClass('fixed-wr');      };	
});
	
});


