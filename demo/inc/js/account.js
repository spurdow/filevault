$(function(){
	$(document).ready(function () {
		loaddata();
		loadaccount();

		var content = $(document);
		content.delegate("#btn_save","click",function(){
						
			$.post( "../inc/php/request.php",{
					cmd:"edit_balance",
					money: $('#balance1_text').val()})
				.done(function(data){
					var data = $.parseJSON(data);
					if(data.status=='success'){
						alert('success');
						$('#balance1').children(0).remove();
						$('#balance1').append('<h3>$' + data.money + ' CAD</h3>')
						$("#balance2").html('$' + data.money + ' CAD');
						$("#balance3").html('$' + data.money + ' CAD');
						$('#edit_b1').val('false');
					}
				});

		});

		content.delegate("#btn_cancel" , "click" , function(){
			var money = $("#balance1_text").val();
			$('#balance1').children(0).remove()
			$('#balance1').append('<h3>$' + money + ' CAD</h3>');
			$('#edit_b1').val('false');
		});

		$("#balance1").click(function(){
			var check = $('#edit_b1').val();
			if(check === 'false'){
				var balance1 = $(this).children(0).html();
				var money = balance1.replace(/[A-Z$]/g , '');

				$(this).children(0).html("").append("<input type='text' value='"  + money +"' id='balance1_text' check-avail='true'/> ")
				.append('<input type="button" id="btn_save" value="Save" />' )
				.append('<input type="button" id="btn_cancel" value="Cancel" />' );
				
				$('#edit_b1').val('true');
			}
		});


		
		$("#opent").click(function(){
			$(".accounts_content").css({"display":"none"});
			$("#addtransaction").css({"display":"block"});
		});
		
		$("#closet").click(function(){
			$(".accounts_content").css({"display":"block"});
			$("#addtransaction").css({"display":"none"});
		});
		
		$("#addnewaccount").click(function(){
			
			$.post( "../inc/php/request.php",{
					cmd:"newaccount",
					id:1,
					nme:$("#fullname").val(),
					com:$("#compny").val(),
					bal:$("#bamount").val(),
					eml:$("#temail").val()})
				.done(function(data){
				});
			
			$("#name h2").html($("#fullname").val());
			$("#company").html($("#compny").val()+" | Account Type: Business | Status: <a href=''> Verified </a>");
			$("#balance1 h3").html("$"+$("#bamount").val()+" CAD");
			$("#balance2").html("$"+$("#bamount").val()+" CAD");
			$("#balance3").html("$"+$("#bamount").val()+" CAD");
			$("#aemail").html($("#temail").val());
			
			$(".accounts_content").css({"display":"block"});
			$("#addtransaction").css({"display":"none"});
		});
		
		$("#addtrans").click(function(){
			addtransaction();
		});
		
		$("#saveall").click(function(){
			for (var i=0; i<18; i++)
			  {
			  	editalltransaction(i+1);
			  }
			alert("All transaction have been successfully updated.");
		});
	});
});

function loaddata(){
	$.post( "../inc/php/request.php",{cmd:"getdata"})
	.done(function(data){
  		$("#listview tbody").html(data);
		
		$(".details").click(function(){
			getaccount($(this).attr('id'));
		  	$(".accounts_content").css({"display":"none"});
			$("#addtransaction").css({"display":"none"});
			$("#detailstransaction").css({"display":"block"});
		});
		
		$("#backtoaccount").click(function(){
		  	$(".accounts_content").css({"display":"block"});
			$("#addtransaction").css({"display":"none"});
			$("#detailstransaction").css({"display":"none"});
		});
		
	});
}

function loadaccount(){
	$.post( "../inc/php/request.php",{cmd:"loadaccount",id:1})
	.done(function(data){
		var obj = jQuery.parseJSON(data);
		
		$("#name h2").html(obj['FullName']);
		$("#company").html(obj['Company']+' | Account Type: Business | Status: <a href=""> Verified </a>');
		$("#balance1 h3").html('$'+obj['Paypalbalance']+' CAD');
		$("#balance2").html('$'+obj['Paypalbalance']+' CAD');
		$("#balance3").html('$'+obj['Paypalbalance']+' CAD');
		$("#aemail").html(obj['Email']);
	});
}

function getaccount(id){
	$.post( "../inc/php/request.php",{cmd:"account",id:1})
	.done(function(data){
		var obj = jQuery.parseJSON(data);
		
		$("#aaddress").html('<textarea class="etextarea" id="eaddress">'+obj['Address']+'</textarea>');
		$("#autn").html('<input class="erow" id="eutn" type="text" value="'+obj['UID']+'"/>');
		$("#aname").html('<input class="erow" id="ename" type="text" value="'+obj['Name']+'"/>');
		$("#aemailf").html('<input class="erow" id="eemailf" type="text" value="'+obj['EmailF']+'"/>');
		$("#aemailt").html('<input class="erow" id="eemailt" type="text" value="'+obj['EmailT']+'"/>');
		$("#atamount").html('<input class="erow" id="etamount" type="text" value="'+obj['Tamount']+'"/>');
		$("#afamount").html('<input class="erow" id="efamount" type="text" value="'+obj['Famount']+'"/>');
		$("#anamount").html('<input class="erow" id="enamount" type="text" value="'+obj['Namount']+'"/>');
		$("#aiamount").html('<input class="erow" id="eiamount" type="text" value="'+obj['Iamount']+'"/>');
		$("#aitemtype").html('<input class="erow" id="eit" type="text" value="'+obj['ItemTitle']+'"/>');
		$("#adate").html('<input class="erow" id="edate" type="text" value="'+obj['DateTime']+'"/>');
		$("#atime").html('<input class="erow" id="etime" type="text" value="'+obj['Extra1']+'"/>');
		$("#astatus").html('<input class="erow" id="estatus" type="text" value="'+obj['Status']+'"/>');
		$("#adesc").html('<input class="erow" id="edesc" type="text" value="'+obj['Description']+'"/>');
		
		$("#aclose").click(function(){
			$(".accounts_content").css({"display":"block"});
			$("#addtransaction").css({"display":"none"});
			$("#detailstransaction").css({"display":"none"});
		});
		
		$("#aedit").click(function(){
			edittransaction();
		});
	});
}

function addtransaction(){
	$.post( "../inc/php/command.php", {cmd:"add",utn:$("#utn").val(),pdate:$("#pdate").val(),sta:$("#status").val(),nme:$("#pname").val(),emlf:$("#pfemail").val(),emlt:$("#ptemail").val(),tam:$("#ptamount").val(),fam:$("#pfamount").val(),nam:$("#pnamount").val(),iam:$("#piamount").val(),it:$("#pititle").val(),add:$("#paddress").val()})
	.done(function(data){
		alert("Transaction have been successfully save.")
		$(".accounts_content").css({"display":"block"});
		$("#addtransaction").css({"display":"none"});
		$("#detailstransaction").css({"display":"none"});
		loaddata();
	});
}

function edittransaction(){
	$.post( "../inc/php/request.php", {cmd:"edit",utn:$("#eutn").val(),pdate:$("#edate").val(),ptime:$("#etime").val(),sta:$("#estatus").val(),nme:$("#ename").val(),emlf:$("#eemailf").val(),emlt:$("#eemailt").val(),tam:$("#etamount").val(),fam:$("#efamount").val(),nam:$("#enamount").val(),iam:$("#peiamount").val(),it:$("#eit").val(),add:$("#eaddress").val(),desc:$("#edesc").val()})
	.done(function(data){
		alert("Transaction have been successfully edited.");
	});
}

function editalltransaction(count){
	$.post( "../inc/php/request.php", {cmd:"editall",c:count,pdate:$("#date"+count).val(),sta:$("#status"+count).val(),nme:$("#name"+count).val(),tam:$("#tamount"+count).val(),typ:$("#type"+count).val()})
	.done(function(data){
	});
}