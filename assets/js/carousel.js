(function($, Drupal) {

    "use strict";
    Drupal.behaviors.businessCarousel = {
        attach: function(context, settings) {
            $(document).ready(function() {


                $("#owl-demo").owlCarousel({
                      margin: 30,
                      items : 2,
                      loop: true,
                      itemsDesktop : [1199,3],
                      itemsDesktopSmall : [979,3]
 
                });
                 $('.carousel-responsive-health').owlCarousel({
                        center: true,
                        autoplay: true,
                        loop:true,
                        autoWidth: true,
                        margin: 4,
                        autoplayTimeout:3000,
 
                });

                $('.carousel-responsive-hospital').owlCarousel({
                        center: true,
                        autoplay: true,
                        loop:true,
                        autoWidth: true,
                        margin: 4,
                        autoplayTimeout:3000,
 
                });

                $('.carousel-responsive-travel').owlCarousel({
                        center: true,
                        autoplay: true,
                        loop:true,
                        autoWidth: true,
                        margin: 4,
                        autoplayTimeout:3000,
 
                });

                 $(".owl-carousel").owlCarousel({
          loop: true,
          autoplay: true,
          items: 1,
          nav: true,
          autoplayHoverPause: true,
          animateOut: 'slideOutUp',
          animateIn: 'slideInUp'
        });

                $('.partners-list .partner-carousel').owlCarousel({
                    itemsCustom: [
                        [0, 2],
                        [361, 3],
                        [541, 4],
                        [992, 5],
                        [1200, 6],
                    ],
                    navigation: true
                });

                jQuery('.field-name-field-galleries .field-items').owlCarousel({
                    singleItem: true,
                    navigation: true,
                    pagination: true
                });



            $('.carousel-responsive-news').owlCarousel({
                loop:false,
                margin:30,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            })

                /*if($('.carousel-responsive-news').length) {
                $('.carousel-responsive-news').slick({
                    dots: false,
                infinite: false,
                speed: 300,
                itemMargin: 30,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }]
              });
            }*/


            $('.carousel-responsive-you-might').owlCarousel({
                    loop:true,
                    margin:30,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:4
                        }
                    }
                })
           /* if($('.carousel-responsive-you-might').length) {
                $('.carousel-responsive-you-might').slick({
                    dots: false,
                infinite: false,
                speed: 300,
                stagePadding: 50,
                loop:true,
                margin:100,
                nav:true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }]
              });
            }*/

           
            // Can also be used with $(document).ready()

  /*$('.carousel-responsive-video').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 2,
    maxItems: 4
  });
*/
// Can also be used with $(document).ready()
            $('.carousel-responsive-video').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 30,
                minItems: 2,
                maxItems: 4
            });

            if($('.carousel-responsive-quicktabs').length) {
                $('.carousel-responsive-quicktabs').slick({
                    dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
              });
            }

             if($('.carousel-responsive-mostviews').length) {
                $('.carousel-responsive-mostviews').slick({
                    dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
                
              });
            }

            });
    }
};


})(jQuery, Drupal);
