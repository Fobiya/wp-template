/**
 * File navigation.js.
 *
 *Slick Slider
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(document).ready(function($) {
  
// ===========================================================
// SCROLL
// ===========================================================
//
  
  
    
    let oldScroll = 0;
  
    $(document).scroll(function() {

        var scrollTop = $(window).scrollTop();

        if (scrollTop < oldScroll) {
            $('.menu__width').addClass('open_top');

        } else if (scrollTop > oldScroll) {
            $('.menu__width').removeClass('open_top');

        }
        oldScroll = scrollTop;

    });
  
  let height = $(window).scrollTop();

  if(height <= 350 ) {
    $('.menu__width').removeClass('open');
  
  
  }

  $(window).scroll(function() {
      var height = $(window).scrollTop();

      if(height < 350 ) {
            $('.menu__width').removeClass('open');
              $('.menu__width').removeClass('open_top');
            $('.menu__width').removeClass('scroll__');
      } else {
//           $('.menu__width').addClass('open');
            $('.menu__width').addClass('scroll__');
      }
  });
  
  
  



// ===========================================================
// END SCROLL
// ===========================================================
  
// =========================================================== 
// Scroll BAR
// ===========================================================  
    

    $(window).scroll(function() {
        // calculate the percentage the user has scrolled down the page
        var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

        $('.bar-long').css('width', scrollPercent + "%");

    });
    
 
// =========================================================== 
// END Scroll BAR 
// ===========================================================
  
   // language
  
//    $('.wpml-ls-current-language>a').removeAttr('href');
//
//
//    $('.wpml-ls').on('click', function() {
//      $(this).addClass('open');  
//    }); 
//
//
//    $(document).mouseup(function(e) { // web document click event
//      var div = $(".wpml-ls"); // here we specify the ID of the element
//      if (!div.is(e.target) // if the click was not on our block
//        &&
//        div.has(e.target).length === 0) { // and not by its children
//        $(".wpml-ls").removeClass("open");
//      }
//    });  

   // language
  
    // Readmore shortcode
  
      $(document).ready(function() {
          // Readmore shortcode
          $('.readmore--btn').on('click', function() {
              $(this).siblings('.readmore--content').toggle("slow");
              $(this).parent().find('.readmore--btn').toggleClass("none");
          });
      });

  
    //  END Readmore shortcode
  
  
    // NATIVE LIST class link

//    document.querySelectorAll('.mte_news>.mte_new').forEach(function(item){
//        item.addEventListener('click',function(item){
//            this.querySelector("a.mte_news--link").click();
//        }); 
//    });    

    // END NATIVE LIST class link

    //   FAQ PAGES
//    $(function() {
//        $('.tab__content ul li').click(function() {
//            $(this).toggleClass('active');
//            $(this).toggleClass('ion-plus ion-minus');
//
//        });
//    });
//
//    $(function() {
//        $('.tab__menu .namber1').click(function() {
//            $('.tab__content ul').removeClass('open');
//            $('.tab__menu a').removeClass('active');
//            $('.tab__content .list1').addClass('open');
//            $('.tab__menu .namber1').addClass('active');
//
//
//        });
//    });
//    $(function() {
//        $('.tab__menu .namber2').click(function() {
//            $('.tab__content ul').removeClass('open');
//            $('.tab__menu a').removeClass('active');
//            $('.tab__content .list2').addClass('open');
//            $('.tab__menu .namber2').addClass('active');
//        });
//    });
//    $(function() {
//        $('.tab__menu .namber3').click(function() {
//            $('.tab__content ul').removeClass('open');
//            $('.tab__menu a').removeClass('active');
//            $('.tab__content .list3').addClass('open');
//            $('.tab__menu .namber3').addClass('active');
//        });
//    });
//    $(function() {
//        $('.tab__menu .namber4').click(function() {
//            $('.tab__content ul').removeClass('open');
//            $('.tab__menu a').removeClass('active');
//            $('.tab__content .list4').addClass('open');
//            $('.tab__menu .namber4').addClass('active');
//        });
//    });
//    $(function() {
//        $('.tab__menu .namber5').click(function() {
//            $('.tab__content ul').removeClass('open');
//            $('.tab__menu a').removeClass('active');
//            $('.tab__content .list5').addClass('open');
//            $('.tab__menu .namber5').addClass('active');
//        });
//    });
    //  END  FAQ PAGES


    //   SCROLL DOWN

    $('a[href^="#"].scroll').click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 500,
            easing: "swing"
        });
        return false;
    });

    //  End SCROLL DOWN



    //  NAVIGATION SLICK SLIDER

    $('.webinar__video__next').click(function() {
        $webinar__video.slick('slickNext');
    });

    $('.webinar__video__prev').click(function() {
        $webinar__video.slick('slickPrev');
    });

    var $webinar__video = $('.slid');

    $(document).ready(function() {

        $webinar__video.slick({

            arrows: false,
            dots: false,

                autoplay: true,
            speed: 800,
        autoplaySpeed:450,
            infinite: true,

            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [

                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]

        });

    });

    /* -------------------------------------------------------------- */


//    $('.webinar__post__next').click(function() {
//        $webinar__post.slick('slickNext');
//    });
//
//    $('.webinar__post__prev').click(function() {
//        $webinar__post.slick('slickPrev');
//    });
//
//
//    var $webinar__post = $('.webinar__post');
//
//    $(document).ready(function() {
//
//        $webinar__post.slick({
//
//
//            arrows: false,
//            dots: false,
//            //
//            //    autoplay: false,
//            speed: 400,
//
//            infinite: true,
//
//            slidesToShow: 3,
//            slidesToScroll: 1,
//            responsive: [
//
//                {
//                    breakpoint: 1399,
//                    settings: {
//                        arrows: false,
//                        slidesToShow: 3,
//                        slidesToScroll: 1,
//                    }
//                }, {
//                    breakpoint: 1199,
//                    settings: {
//                        arrows: false,
//                        slidesToShow: 2,
//                        slidesToScroll: 1,
//                    }
//                },
//                {
//                    breakpoint: 992,
//                    settings: {
//                        arrows: true,
//                        slidesToShow: 2,
//                        slidesToScroll: 1,
//                    }
//                },
//                {
//                    breakpoint: 700,
//                    settings: {
//                        arrows: true,
//                        slidesToShow: 1,
//                        slidesToScroll: 1,
//                    }
//                }
//            ]
//
//        });
//    });

    /* -------------------------------------------------------------- */

//    $('.slider__trading').slick({
//
//        arrows: false,
//        dots: false,
//
//        autoplay: false,
//        speed: 400,
//
//        infinite: true,
//
//        slidesToShow: 4,
//        slidesToScroll: 1,
//        centerPadding: '20px',
//        responsive: [
//
//            {
//                breakpoint: 1399,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 3,
//                    slidesToScroll: 1,
//        autoplay: true,
//        speed: 400,
//                }
//            }, {
//                breakpoint: 1199,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 2,
//                    slidesToScroll: 1,
//                  
//                          autoplay: true,
//        speed: 400,
//                }
//            },
//            {
//                breakpoint: 900,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 1,
//                    slidesToScroll: 1,
//                  
//                          autoplay: true,
//        speed: 400,
//                }
//            }
//        ]
//    });
//  
//
//    $('.slider__depo').slick({
//
//        arrows: false,
//        dots: false,
//
//        autoplay: false,
//        speed: 400,
//
//        infinite: true,
//
//        slidesToShow: 7,
//        slidesToScroll: 1,
//        centerPadding: '20px',
//        responsive: [
//
//            {
//                breakpoint: 1399,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 5,
//                    slidesToScroll: 1,
//                }
//            }, {
//                breakpoint: 1199,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 4,
//                    slidesToScroll: 1,
//                }
//            },
//            {
//                breakpoint: 900,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 3,
//                    slidesToScroll: 1,
//                }
//            },
//            {
//              breakpoint: 510,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 2,
//                    slidesToScroll: 1,
//                }
//            }
//        ]
//    });
//  
//  
//    $('.slider__depo_amount').slick({
//
//        arrows: false,
//        dots: false,
//
//        autoplay: false,
//        speed: 400,
//
//        infinite: true,
//
//        slidesToShow: 3,
//        slidesToScroll: 1,
//        centerPadding: '20px',
//        responsive: [
//
//            {
//                breakpoint: 1399,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 3,
//                    slidesToScroll: 1,
//                }
//            }, {
//                breakpoint: 1199,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 2,
//                    slidesToScroll: 1,
//                }
//            },
//            {
//                breakpoint: 900,
//                settings: {
//                    arrows: true,
//                    slidesToShow: 1,
//                    slidesToScroll: 1,
//                }
//            }
//        ]
//    });
  
  
  
  
    // NAVIGATION MENU LEFT

    $(function() {
        $('.menu-button').click(function() {
            $('.box__menu').toggleClass('open');
        });
    });

    $(document).mouseup(function(e) { // web document click event
        var div = $(".box__menu"); // here we specify the ID of the element
        if (!div.is(e.target) // if the click was not on our block
            &&
            div.has(e.target).length === 0) { // and not by its children
            $(".box__menu").removeClass("open");
        }
    });


    // NAVIGATION STANDART 
    
    
    $("[class*='tab__menu'] a").click(function(){
 $("[class*='tab__menu'] a").removeClass('active');
 $(this).addClass('active');

//   $("[class*='calculators__tab__menu'] a span").removeClass('active');
  $(this).find("span").addClass('active');

  var activeAdd = $(this).data('tab');
  $("[class*='tab__block']").removeClass('active');

  $("[class*='tab__block" + activeAdd + "']").addClass('active'); 
   
});


});