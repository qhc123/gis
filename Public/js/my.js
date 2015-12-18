$(document).ready(function(){
	
	$('.carousel').carousel({
	  interval: 4000
	})

});

window.onload = function(){ 
　
	//底部版权定位
	//$(window).height()

	if($(window).height()>$(document.body).height()){   
	    $(".footer").css({
	           "position":"absolute",          //样式变成fixed
	           "width":"80%",          //样式变成fixed
	           "margin-left":"10%",          //样式变成fixed

	       });
	}else{
	    $(".footer").css({
	        "position":"relative",     //样式变成relative
	    });
	}
} 

$(window).resize(function(){
	jQuery.getScript("my.js");
})


		