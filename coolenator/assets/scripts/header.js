let humburdger = document.querySelector('.humberger');
let block = document.querySelector('body');

if(humburdger !== null ) {
    humburdger.addEventListener('click', ()=>{
        block.classList.add('active');
    }
    );
    let close = document.querySelector('.close');
    close.addEventListener('click', ()=>{
        block.classList.remove('active')
    })
}

let search = document.querySelector('.icon-item .search');

if(search !== null ) {
	let form = document.querySelector('.site-branding');
	search.addEventListener('click', ()=>{
		form.classList.add('active');
	});
	block.addEventListener('click', ()=>{
		if(!event.target.closest('.site-branding') && event.target !== search) {
			form.classList.remove('active');
		}
	})
}
