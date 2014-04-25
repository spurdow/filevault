$(function(){
	$(document).ready(function () {
		$("#submit").click(function(){
			window.location.href = 'loadaccount.php';
		});
		
		$("#start").click(function(){
			$(".home_content").css({"display":"block"});
			$(".home_content2").css({"display":"none"});
			$(".home_content3").css({"display":"none"});
			$(".home_content4").css({"display":"none"});
		});
		
		$("#payment").click(function(){
			$(".home_content").css({"display":"none"});
			$(".home_content2").css({"display":"block"});
			$(".home_content3").css({"display":"none"});
			$(".home_content4").css({"display":"none"});
		});
		
		$("#money").click(function(){
			$(".home_content").css({"display":"none"});
			$(".home_content2").css({"display":"none"});
			$(".home_content3").css({"display":"block"});
			$(".home_content4").css({"display":"none"});
		});
		
		$("#ebay").click(function(){
			$(".home_content").css({"display":"none"});
			$(".home_content2").css({"display":"none"});
			$(".home_content3").css({"display":"none"});
			$(".home_content4").css({"display":"block"});
		});
	});
});


