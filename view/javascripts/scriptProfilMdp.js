$(function() {

	$("#mdp_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();

	var error_mdp= false;
	var error_password = false;
	var error_retype_password = false;

	$("#mdp_error_message").focusout(function() {

		check_mdp();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
	});

    function check_mdp() {
	
		var mdp_length = $("#form_mdp").val().length;
		
		if(mdp_length < 8) {
			$("#mdp_error_message").html("Au moins 8 caractères !");
			$("#mdp_error_message").show();
			error_mdp = true;
		} else {
			$("#mdp_error_message").hide();
		}
	
	}

	function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 8) {
			$("#password_error_message").html("Au moins 8 caractères !");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
	}

	function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		var retype_password_length = $("#form_retype_password").val().length;
		
		if(retype_password_length < 8) {
			$("#retype_password_error_message").html("Au moins 8 caractères !");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		}
		else {
			if(password !=  retype_password) {
				$("#retype_password_error_message").html("Les mots de passe ne correspondent pas !");
				$("#retype_password_error_message").show();
				error_retype_password = true;
			}
			else {
				$("#retype_password_error_message").hide();
			}
		}
	}

	$("#mdpChangement_form").submit(function() {

		error_mdp = false;							
		error_password = false;
		error_retype_password = false;
						
		check_mdp();
		check_password();
		check_retype_password();
		
		if(error_mdp == false && error_password == false && error_retype_password == false) 
		{
			return true;
		} 
		else 
		{
			return false;	
		}

	});

});