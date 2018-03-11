<html>
<body>

<form name="enquryform">
<div id="statusmsg" style="color:red;"></div>
 Name:<br>
  <input type="text" name="name" id="name" value="">
  <br>
  Phone:<br>
  <input type="text" name="mobile" id="mobile" value="">
  <br><br>
  Email:<br>
  <input type="text" name="emailid" id="emailid" value="">
  <br>
  <input type="button" value="Submit" onclick="enqueryform()">
</form> 

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function enqueryform(){
	
	var name = $('#name').val(); 
	var mobile = $('#mobile').val(); 
	var emailid = $('#emailid').val(); 
	
	$.ajax({
		type: "POST",
		url: "submitdata.php",
		data:{
			"user_name":name,
			"user_emailid":emailid,
			"user_mobileno":mobile,
		},
		success:function(response) {
      alert(response);
	  if(response.trim()=='SUCCESS'){
		  $('#statusmsg').html('').html('<p style="color:green">Your enquiry send</p>');
		  
	  }
	  else{
		  $('#statusmsg').html('').html('Pleas try again. ');
	  }
	  
    }
	});
}
</script>