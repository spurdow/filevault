// JavaScript Document
$(function(){
	
	$(document).ready(function(){
		
		//$("#my-awesome-dropzone").dropzone({ url: "/file/post" });
		//$("dropzoneDocs").dropzone({ url: "../../uploader214.asp" });
		
		Dropzone.options.dropzone_id = {
			url:'inc/php/dropzone.php',
			method: 'POST',
			dictDefaultMessage:"Drop or Select files here to upload.(Accept images/PDF file only)",
			maxFilesize:3,
			maxFiles:1,
			acceptedFiles:".pdf,image/*",
			addRemoveLinks:"Cancel",
			accept: function(file, done) {
			// Test if the file is valid
			if (file.size == 1337) {
			done("Can't accept the file because the filesize is weird.");
			}
			else done(); // All good
			},
			init: function() {
			// Setup event listeners if necessary, example:
			this.on("success", function() { /*alert("Thank you for uploading a file.");*/ });
			}
		}
		
	});// end of document ready
	
	
})// end of jQuery function


//Copy and Rename the file
function copyFile(filename,ctr,imagetype,picturetype){
	
	var result, datastring, imageid;
	
	if(imagetype=="editpics"||imagetype=="editdocs"){
		imageid = $("#newmemberid").val()
		}else{
			imageid = $("#districtID").val().toString() + $("#memberID").val().toString()
			}

	datastring = {e : Number(new Date()),
	              imgfilename : filename,
				  imgtype    : imagetype,
				  imgctr     : ctr,
				  imgid      : imageid,
				  pictype    : picturetype,
	              renamefile : true};
									 
	$.ajax({
		type: "POST",
		url: "",
		async: false,
		data: datastring,
		success: function(data){result=data;},
		error: function(data){if(data.status==500){}}
		})

	return result;	
	
}
		
//Remove the file		
function removeFile(filename,imagetype){
	
	var result, datastring, imageid;

    if(imagetype=="EditPicture"||imagetype=="EditDocument"){
		imageid = $("#newmemberid").val()
		}else{
			imageid = $("#districtID").val().toString() + $("#memberID").val().toString()
			}

	datastring = {e : Number(new Date()),
	              imgfilename : filename,
				  imgid       : imageid,
				  typeimg     : imagetype,
	              removefile  : true};
									 
	$.ajax({
		type: "POST",
		url: "",
		async: false,
		data: datastring,
		success: function(data){result=data;},
		error: function(data){if(data.status==500){}}
		})

   return result;	
}

//Copy and Rename the Work Order file
function copyWorkOrderFile(filename){
	
	var result, datastring;

	datastring = {e : Number(new Date()),
	              imgfilename : filename,
	              cmd : "renamedoc"};
									 
	$.ajax({
		type: "POST",
		url: "../inc/vb/workorder/workorder.ajax.asp",
		async: false,
		data: datastring,
		success: function(data){result=data;},
		error: function(data){if(data.status==500){}}
		})

	return result;	
	
}

//Remove the Work Order file		
function removeWorkOrderFile(filename){
	
	var result, datastring;

	datastring = {e : Number(new Date()),
	              imgfilename : filename,
	              cmd  : "removedoc"};
									 
	$.ajax({
		type: "POST",
		url: "../inc/vb/workorder/workorder.ajax.asp",
		async: false,
		data: datastring,
		success: function(data){result=data;},
		error: function(data){if(data.status==500){}}
		})

   return result;	

}

