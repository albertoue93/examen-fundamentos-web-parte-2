jQuery(function($){
	$('#wl_faq').click(function (e) {
		$('#wl_vidtt, #wl_support').removeClass('active');
		$(this).addClass('active');

		$('#wl_vidtt_content, #wl_support_content').removeClass('active');
		$('#wl_faq_content').addClass('active');
	});
	$('#wl_vidtt').click(function (e) {
		$('#wl_faq, #wl_support').removeClass('active');
		$(this).addClass('active');

		$('#wl_faq_content, #wl_support_content').removeClass('active');
		$('#wl_vidtt_content').addClass('active');
	});
	$('#wl_support').click(function (e) {
		$('#wl_faq, #wl_vidtt').removeClass('active');
		$(this).addClass('active');
		
		$('#wl_faq_content, #wl_vidtt_content').removeClass('active');
		$('#wl_support_content').addClass('active');
	});

	$('.woolementor-help-heading').click(function(e){
		var $this = $(this);
		var target = $this.data('target');
		$('.woolementor-help-text:not('+target+')').slideUp();
		if($(target).is(':hidden')){
			$(target).slideDown();
		}
		else {
			$(target).slideUp();
		}
	});

	$(document).on("click","#wl-widget-survey-btn, .is-dismissible.wl-widget-survey .notice-dismiss",function(e){
		e.preventDefault();
		$('.notice.notice-success.is-dismissible.wl-widget-survey').slideUp('slow');
		var $survey = $(this).data('survey');
		$.ajax({
			url: WOOLEMENTOR.ajaxurl,
			data: { 'action':'widget-survey', survey: $survey, '_nonce' : WOOLEMENTOR.nonce },
			type: 'POST',
			dataType: 'JSON',
			success: function(resp){
				console.log(resp);
			}
		});
	})
})