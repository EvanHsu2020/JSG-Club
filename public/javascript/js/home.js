// JavaScript Document
var animParamsU = false;
var animParamsD = false;
var animParamsH = false;
var animoldScroll = 0;
var headboxBtn = $('#home .headinfo2');
$(window).load(function() {
	var offset_o = $('#offset_info').position();
	var gocontent_o = offset_o.top-40;
	$('.border-two').scroll(function () {
		if ($(this).scrollTop() > 2 && allmt_width > 991) {
			if(!animParamsH && $(this).scrollTop() > animoldScroll){
	            disableScroll();
	            bodyscroll.stop().animate({
	                scrollTop: offset_o.top
	            },{duration:400, easing:'easeOutExpo', complete:function(){animParamsH = true;enableScroll();}});

        	}else{
				if($(this).scrollTop() < animoldScroll && $(this).scrollTop() < gocontent_o && animParamsH){
		            disableScroll();
		            bodyscroll.stop().animate({
		                scrollTop: 0
		            },{duration:400, easing:'easeOutExpo', complete:function(){animParamsH = false;enableScroll();}});
	        	}
			}
		}
		animoldScroll=$(this).scrollTop();

		if ($(this).scrollTop() > gocontent_o) {
			if(!animParamsU){
				animParamsU = true;
				animParamsD = false;
				headboxBtn.stop().animate({'right':'0px'},{duration:300, easing:'easeInOutCubic', complete:function(){animParamsU = false;}});
			}
		} else {
			if(!animParamsD){
				animParamsD = true;
				animParamsU = false;
				headboxBtn.stop().animate({'right':'-365px'},{duration:300, easing:'easeInOutCubic', complete:function(){animParamsD = false;}});
			}
		}
	});


	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	  e = e || window.event;
	  if (e.preventDefault)
	      e.preventDefault();
	  e.returnValue = false;  
	}

	function preventDefaultForScrollKeys(e) {
	    if (keys[e.keyCode]) {
	        preventDefault(e);
	        return false;
	    }
	}

	function disableScroll() {
	  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, { passive: false });
	  window.onwheel = preventDefault; // modern standard
	  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
	  window.ontouchmove  = preventDefault; // mobile
	  document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
	    if (window.removeEventListener)
	        window.removeEventListener('DOMMouseScroll', preventDefault, { passive: false });
	    window.onmousewheel = document.onmousewheel = null; 
	    window.onwheel = null; 
	    window.ontouchmove = null;  
	    document.onkeydown = null;  
	}


    $(window).resize(function(e) {
	    offset_o = $('#offset_info').position();
	    gocontent_o = offset_o.top-20;
    });
});