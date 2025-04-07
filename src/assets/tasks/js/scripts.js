$( document ).ready(function() {
	filter_buttons();
});
function filter_buttons(){
	$('.filter_btn').on('click', function(){
		$('.filter_btn').removeClass('filter_btn_select');
		$(this).addClass('filter_btn_select');
	});

	$('#btn_filter_proj').on('click', function(){
		$('.over').toggleClass('hidden');
	});
}



//для закрытия по клику вне меню
$(document).on('click', function(event) {
  	if (!$(event.target).closest('.filter_content').length) {
    	$('.over').each(function() {
      		if ($(this).css('display') !== 'none') {
      			$(this).addClass('hidden');
      		}
    	});
  	}
});
