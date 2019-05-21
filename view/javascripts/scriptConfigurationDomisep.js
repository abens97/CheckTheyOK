$(function() {

	$("#email_error_message").hide();

	var error_email = false;

	$("#form_email").focusout(function() {

		check_email();
		
	});
	

	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Adresse e-mail invalide !");
			$("#email_error_message").show();
			error_email = true;
		}

	}

	$("#registrationEmail").submit(function() {

		error_email = false;
		
		check_email();
		
		if(error_email == false) {
			return true;
		} else {
			return false;	
		}

	});

});