document.addEventListener('DOMContentLoaded', function(){
	jQuery(document).ready( function($){
		let ajax_url = misha.ajaxurl;
		//console.log(ajax_url);

		$(".search-change").on("input", function() {

			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: $("#search-change").serialize(),

				success: function (response) {// success callback function
					//                     $('.list').addClass('open');
					$('.select>.list').remove();
					$('.select').append(response);
				}
			});

		});

	})
})