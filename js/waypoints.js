$('#mainNav').waypoint(function(direction) {
	if (direction == 'down') {
		$('#mainNav').addClass('scrolled');
		$('.logo').addClass('scrolled');
		$('.header').addClass('scrolled');
		$('.header-content').addClass('scrolled');
    } else {
        $('#mainNav').removeClass('scrolled');
        $('.logo').removeClass('scrolled');
        $('.header').removeClass('scrolled');
        $('.header-content').removeClass('scrolled');
    }
}, { offset: '25' });