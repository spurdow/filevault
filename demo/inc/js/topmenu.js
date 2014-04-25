$(function(){
	$(document).ready(function () {
		
		$("#bcc").click(function(){
			basecampmenu();
		});
		
		$("#fc").click(function(){
			freelancermenu();
		});
		
		$("#tcc").click(function(){
			techmenu();
		});
		
		$("#pc").click(function(){
			paypalmenu();
		});
		
		$("#cnnc").click(function(){
			cnnmenu();
		});
		
		$("#fnc").click(function(){
			foxmenu();
		});
		
	});
});


function paypalmenu(){
	$(".paypal").css({"display":"block"});
	$(".headertopmenu").css({"background":"url(../thms/img/paypalmenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"block"});
	$(".othercontent").css({"display":"none"});
	$(".container").css({"display":"block"});
}

function basecampmenu(){
	$(".paypal").css({"display":"none"});
	$(".headertopmenu").css({"background":"url(../thms/img/basecampmenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"none"});
	$(".container").css({"display":"none"});
	$(".othercontent").css({"display":"block"});
	$(".othercontent").css({"background":"url(../thms/img/basecamp.png) top left no-repeat"});
}

function freelancermenu(){
	$(".paypal").css({"display":"none"});
	$(".headertopmenu").css({"background":"url(../thms/img/freelancermenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"none"});
	$(".container").css({"display":"none"});
	$(".othercontent").css({"display":"block"});
	$(".othercontent").css({"background":"url(../thms/img/freelancer.png) top left no-repeat"});
}

function cnnmenu(){
	$(".paypal").css({"display":"none"});
	$(".headertopmenu").css({"background":"url(../thms/img/cnnmenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"none"});
	$(".container").css({"display":"none"});
	$(".othercontent").css({"display":"block"});
	$(".othercontent").css({"background":"url(../thms/img/cnn.png) top left no-repeat"});
}

function foxmenu(){
	$(".paypal").css({"display":"none"});
	$(".headertopmenu").css({"background":"url(../thms/img/foxnewsmenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"none"});
	$(".container").css({"display":"none"});
	$(".othercontent").css({"display":"block"});
	$(".othercontent").css({"background":"url(../thms/img/foxnews.png) top left no-repeat"});
}

function techmenu(){
	$(".paypal").css({"display":"none"});
	$(".headertopmenu").css({"background":"url(../thms/img/techmenu.png) top left no-repeat"});
	$(".paypalbar").css({"display":"none"});
	$(".container").css({"display":"none"});
	$(".othercontent").css({"display":"block"});
	$(".othercontent").css({"background":"url(../thms/img/techcrunch.png) top left no-repeat"});
}