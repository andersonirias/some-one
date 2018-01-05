$(document).ready(function(){

    $("#theTarget").skippr();

});
$(document).ready(function() {

var owl = $("#owl-demo");
  owl.owlCarousel({
   /* items: 12, //10 items above 1000px browser width*/
    autoplay:true,
    loop:true,
    margin:10,
    itemsDesktop: [1000, 5], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
    itemsTablet: [600, 2], //2 items between 600 and 0
    itemsMobile: true,// itemsMobile disabled - inherit from itemsTablet option
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:false
        },
        600:{
            items:5,
            nav:false
        },
        1000:{
            items:12,
            nav:false,
            loop:true
        }
    } 
});
});
$(function(){
$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
});
$(function(){
    $('.item-destaque').hover(function(){
        $(this).find('.hover-destaque').show();
	}, function(){
		$(this).find('.hover-destaque').hide();

    });
});
$(function(){
	$('.login').hover(function(){
    $(this).find('.login-page').show();
	}, function(){
    $(this).find('.login-page').hide();
	});
});
$(function(){
    $('.fa-times').on('click',function(){
        $('.info').slideUp();
        });
    });

// Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.btn-news').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('.element_to_pop_up').bPopup();

            });

        });

    })(jQuery);;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('.spn-info').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('.element_to_pop_up').bPopup();

            });

        });

    })(jQuery);


        $(function(){
            $("#theTarget").skippr({
            transition: 'slide',
            speed: 1000,
            easing: 'easeOutQuart',
            navType: 'block',
            childrenElementType: 'div',
            arrows: true,
            autoPlay: false,
            autoPlayDuration: 5000,
            keyboardOnAlways: true,
            hidePrevious: false

        });
        });    
           
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
