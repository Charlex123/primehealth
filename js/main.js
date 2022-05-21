$(function() {

	if ( $('.owl-2').length > 0 ) {
        $('.owl-2').owlCarousel({
            center: false,
            items: 5,
            loop: true,
            stagePadding: 0,
            margin: 10,
            smartSpeed: 1000,
            autoplay: true,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 5
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 5
                }
            }
        });            
    }

})