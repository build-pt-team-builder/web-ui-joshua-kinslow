$(function() {
	if ($('#phpErrors').children().length > 0) {
		$('.container-fluid').css('display', 'none');
		let phpErrors = $('#phpErrors');
		phpErrors.removeClass('phpErrorsClosed');
		phpErrors.addClass('phpErrorsOpen');
	}
});
