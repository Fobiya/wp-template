import Instafeed from 'instafeed.js/dist/instafeed.es';
import 'slick-carousel/slick/slick.min';
$(document).ready(function(){
$('section.catalog .catalog-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="prev"></button>',
    nextArrow: '<button class="next"></button>',
    responsive: [
        {
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});

setTimeout(()=>{
	$('.reviews .shortcode-wcpr-grid').slick({
		slidesToShow: 2,
		vertical: true,
		adaptiveHeight: true,
		slidesToScroll: 1,
		prevArrow: '<button class="prev"></button>',
		nextArrow: '<button class="next"></button>',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});

}, 1000)


	let block = document.querySelector('#instafeed');
	if(block !== null) {
		let feed = new Instafeed({
			template: '<div class="instagram-item"><a href="{{link}}"><img title="{{caption}}" src="{{image}}" /></a></div>',
			accessToken: 'IGQVJVdEtYd2lsQzR5emw5ZAmdvcW5DTGVXU24tUkZABbHV6akFQelRqYW9IM2JjVkRWYTBWVXRpNktwSlpxR1czRUFxRUxiUXJJUUxVa1dZAS0lyM2xiU2Rtc0JsRENkUE94MjlsOXFoNm9qa2pONzhlWgZDZD',
		});

		feed.run();

		setTimeout(()=>{$('.instagram-list').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			adaptiveHeight: false,
			prevArrow: '<button class="prev"></button>',
			nextArrow: '<button class="next"></button>',
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
					},
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
					},
				},
				{
					breakpoint: 420,
					settings: {
						slidesToShow: 1,
					},
				},
			],
		});}, 2000)
	}


$('.row a').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    arrows: false,
    easing: 'linear',
    cssEase: 'linear',
    waitForAnimate: false,
    speed: 4000,
    centerMode: true,
    edgeFriction: 0,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    autoSlidesToShow: true,
    variableWidth: true,
});
});

$('.product-slider-big').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	asNavFor: '.product-slider-small',
	fade: true,
	swipe: false,
	arrows: false,
});

$('.product-slider-small').slick({
	slidesToShow: 3,
	arrows: false,
	slidesToScroll: 1,
	focusOnSelect: true,
	asNavFor: '.product-slider-big',

});
