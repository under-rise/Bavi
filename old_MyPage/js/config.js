/* オーバーレイメニュー */
$(function() {
	$('#navi_btn').click(function(e) {
		$('#overlay_nav.myPage').fadeIn();
		$('#overlay_nav.myPage div').addClass('open');
		$('html').addClass('overlay');
	});
    
	$('#overlay_nav.myPage #close').click(function(e) {
		$('#overlay_nav.myPage').fadeOut();
		$('#overlay_nav.myPage div').removeClass('open');
		$('html').removeClass('overlay');
	});
	$('#overlay_nav.myPage').click(function(e) {
		if(!$(e.target).closest('#overlay_nav.myPage div').length) {
			$('#overlay_nav.myPage').fadeOut();
			$('#overlay_nav.myPage div').removeClass('open');
			$('html').removeClass('overlay');
		}
	});
	$('#overlay_nav.myPage a').click(function(e) {
		$('#overlay_nav.myPage').fadeOut();
		$('#overlay_nav.myPage div').removeClass('open');
		$('html').removeClass('overlay');
	});
});