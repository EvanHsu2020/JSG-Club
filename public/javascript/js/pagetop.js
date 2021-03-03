// JavaScript Document
var animParamsU = false;
var animParamsD = false;
$(function() {
	var topBtn = $('#top_btn');	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			if(!animParamsU){
				animParamsU = true;
				animParamsD = false;
				topBtn.stop().animate({'right':'0px'},{duration:500, complete:function(){animParamsU = false;}});
			}
		} else {
			if(!animParamsD){
				animParamsD = true;
				animParamsU = false;
				topBtn.stop().animate({'right':'-60px'},{duration:500, complete:function(){animParamsD = false;}});
			}
		}
	});
	topBtn.click(function () {
		$('body,html').stop().animate({
			scrollTop: 0
		}, 1000, 'easeInOutCubic');
		return false;
	});
});