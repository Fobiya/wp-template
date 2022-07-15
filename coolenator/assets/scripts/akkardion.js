$('.product-akkordion-item .title').on('click', function () {
	$(this).parent().toggleClass('active');
	$(this).parent().find('.content').slideToggle(500);
})
