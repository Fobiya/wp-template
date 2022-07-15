let businessGift = document.querySelector('.business button');
if(businessGift !== null) {
	let businnesForm = document.querySelector('.business-form');
	let body = document.querySelector('body');
	businessGift.addEventListener('click', ()=>{
		businnesForm.classList.add('active');
		body.classList.add('fixed');
	});
	let close = document.querySelector('.business-form-block .close');

	close.addEventListener('click', ()=>{
		businnesForm.classList.remove('active');
		body.classList.remove('fixed');
	})
}
