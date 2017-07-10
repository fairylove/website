$(function(){
	// 1.找到我们点击的li
	$(".slider-bar li").click(function(){
		// 2.//找到我们点击li的sliderNum
		var sliderNum =$(this).attr("sliderNum");
		console.log(sliderNum);
		// 3.给我们点击的li加上actived,
		$(this).addClass("actived").siblings().removeClass("actived");
		// 4.点击第sliderNum那么我们就显示对应的banner2.jpg 
		$(".box-nav").fadeOut("500",function(){
			$(this).css({background:"url(./images/banner"+sliderNum+".jpg)"}).fadeIn("500");
		})
		
	})

})





