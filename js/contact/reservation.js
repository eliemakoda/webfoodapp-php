$(function(){
	$("#ReservationForm").submit(function(){
		$("#r_submitf").value='Please wait...';
		
		$.post("reservation.php?send=comments", $("#ReservationForm").serialize(),
		function(data){
			if(data.frm_check == 'error'){ 
			
					$("#r_message_post").html("<div class='errorMessage'>ERROR: " + data.msg + "!</div>"); 
					document.ReservationForm.r_submitf.value='Resend >>';
					document.ReservationForm.r_submitf.disabled=false;
			} else {
				$("#r_message_post").html("<div class='successMessage'>Your message has been sent successfully!</div>"); 
				$('.form-control').val("");
				$("#r_submitf").value='Send >>';
				}
		}, "json");
		
		return false;
		
	});
});