/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
  
  
  

  
  
  
  
  
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation don't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button don't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );


$( document ).ready(function() {
    $('.home_pages__slider__section__1').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 7000,
    });

 });


$( document ).ready(function() {
//    $('.services-slidersttt').slick({
//        arrows: false,
//        dots: true,
//
////        infinite: true,
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        customPaging: function(slider, i) {
//          // this example would render "tabs" with titles
//          return '<span class="dot"></span>';
//        },
//      slidesToShow: 4,
//      slidesToScroll: 4,
//      autoplay: true,
//      autoplaySpeed: 7000,
//      
//        responsive: [{
//                breakpoint: 1200,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 3,
//                    slidesToScroll: 1,
//                    infinite: true,
//                }
//     
//            },{
//                breakpoint: 991,
//                settings: {
//                    arrows: false,
//                    slidesToShow: 2,
//                    slidesToScroll: 1,
//                    infinite: true,
//                }
//            },
//            {
//                breakpoint: 950, 
//                settings: {
//                    arrows: false,
//                    slidesToShow: 1,
//                    slidesToScroll: 1,
//                    infinite: true,
//                }
//            }
//        ]
//    });

 });
 

$( document ).ready(function() {
    $('.box__doctors__slid').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: true,

        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
     
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 });

$( document ).ready(function() {
    $('.services-area__slider').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: true,

        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
              
                breakpoint: 99999,
                settings: "unslick"
               
     
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 750, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 });

$( document ).ready(function() {
    $('.sertification').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: true,

        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
     
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 });


$( document ).ready(function() {
    $('.slider_box_gallary').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 });

$( document ).ready(function() {
    $('.about_gallary').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
        infinite: false,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
        infinite: false,
                }
            }
        ]
    });

 });

$( document ).ready(function() {
    $('.ourportfolioarea').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,

        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
          return '<span class="dot"></span>';
        },
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 7000,
      
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
     
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 });

$( document ).ready(function() {
    $('.swiper-slider').slick({
            autoplay: true,
      autoplaySpeed: 7000,
      
        arrows: false,
        dots: true,
        centerMode:true,
        infinite: true,
 
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
//          return '<span class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></span>'; 
        },
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1800,
       speed: 1800,
      
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
     
            },{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 950, 
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

 }); 

  $('a[data-slide]').click(function(e) {
      e.preventDefault();
      var slideno = $(this).data('slide');
      $('.swiper-slider').slick('slickGoTo', slideno - 1);
  });



$( document ).ready(function() {
    $('.slick__wrapper').slick({
            autoplay: true,
      autoplaySpeed: 7000,
        adaptiveHeight: true,
        arrows: false,
        dots: true,

        infinite: false, 

 
        customPaging: function(slider, i) {
          // this example would render "tabs" with titles
//          return '<span class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></span>'; 
        },
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1800,
       speed: 1800,

    });
  
    $(".scroll__").on("click",function(event){
        event.preventDefault();
        var id = $(this).attr('href')
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });


 });





