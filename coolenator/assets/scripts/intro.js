let slider = document.querySelector('.intro .slider-container');
if(slider != null) {

        let list = slider.querySelectorAll('.slider-item');
        list[0].classList.add('active');
        list.forEach((item)=>{
                item.addEventListener('mouseover', ()=> {
                    if ($(window).width() >= '767') {
                        list.forEach((item) => {
                            item.classList.remove('active');
                        })
                        event.target.closest('.slider-item').classList.add('active');
                    }
                })

                item.addEventListener('click', ()=>{
                    if ($(window).width() < '767') {
                        if (event.target.closest('.slider-item').classList.contains('active')) {
                            return false
                        }
                        list.forEach((item) => {
                            item.classList.remove('active');
                            item.style.height = '50px';
                        })
                        if (event.target.closest('.slider-item').classList.contains('active') === false) {
                            console.log(event.target.closest('.slider-item'))
                            event.target.closest('.slider-item').classList.add('active');
                            let h = event.target.closest('.slider-item').scrollHeight;
                            event.target.closest('.slider-item').style.height = h + 'px';
                        }
                    }})
            }
        )
}
