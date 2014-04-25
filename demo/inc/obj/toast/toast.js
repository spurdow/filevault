// JavaScript Document


/********************

*********************/

$(function(){
	
	//Set Toast Location during window resize
	$(window).resize(function() {
			$("#toast").setLocation();
		});
	
	})

function toast(str, err){
	$("#toast")
		.html(str)
		.css({'background-color':(err==0)? '#FDD0D5':'',
			'color':(err==0)? '#000':'',
			'border':(err==0)? '1px solid #F74863':''})
		.stop(true, true)
		.fadeIn(1000, function(){
			$(this).stop(true, true).fadeOut(1000)})
		.setLocation();
	}
	
//Hide Toast object when Clicked
$("#toast").click(function(){
	$("#toast").hide();
	});


//function to immediately hide the toast
function hideToast(){
	$("#toast").hide();
	}


/**********
PLUGIN
**********/
jQuery.fn.setLocation = function () {
    this.css("left", Math.max(0, (($(window).width() - this.outerWidth()) / 2) + 
    $(window).scrollLeft()) + "px");
    return this;
}
	



	
    
   