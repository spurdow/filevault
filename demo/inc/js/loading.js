$(function(){
	$(document).ready(function(){
			window.setTimeout(function (a,b) {
			  clearInterval(myInterval);
			},4500);
	});
});

function count(){
	window.location.href = 'account.php';
}

var myInterval = window.setInterval(function (a,b) {
  count();
},3000);

