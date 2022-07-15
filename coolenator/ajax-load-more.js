jQuery(function($){

	var button = $( '#loadmore a' ),
		paged = button.data( 'paged' ),
		maxPages = button.data( 'max_pages' );

	button.click( function( event ) {
		event.preventDefault();
		$.ajax({
			type : 'POST',
			url : misha.ajaxurl,
			data : {
				paged : paged,
				action : 'loadmore'
			},
			beforeSend : function( xhr ) {
				button.text( 'Show more...' );
			},
			success : function( data ){

				paged++;
				button.parent().before( data );
				button.text( 'Show more' );

				if( paged == maxPages ) {
					button.remove();
				}

			}

		});

	} );
});

