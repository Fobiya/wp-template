if(document.querySelector('#reviews.woocommerce-Reviews') != null) {
	let block = document.querySelector('#reviews.woocommerce-Reviews');
	let button = document.createElement('button');
	button.innerHTML = 'Write a review';
	button.classList.add('btn-review');
	block.appendChild(button);
	button.addEventListener('click', ()=>{
		$('#review_form_wrapper').show();
		$("html, body").animate({
			scrollTop: $("#review_form_wrapper").offset().top,
		});
	});
}
