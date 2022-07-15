let quantity = document.querySelector('.product-template-default .product .quantity');
if(quantity !== null) {
	let plus = document.querySelector(".btn-plus");
	let minus = document.querySelector('.btn-minus');
	let input = quantity.querySelector('input')
	plus.addEventListener('click', ()=>{
		input.value = Number(input.value) + 1;
	})
	minus.addEventListener('click', ()=>{
		input.value = Number(input.value) - 1;
		if(input.value <= '1')  {
			input.value = '1';
		}
	})
}
