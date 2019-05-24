$(function() {

	$("#tel_error_message").hide();
	$("#password_error_message").hide();
	$("retype_tel_error_message").hide();

	var error_tel= false;
	var error_password = false;
	var error_retype_tel= false;

	$("#tel_error_message").focusout(function() {

		check_tel();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#retype_tel_error_message").focusout(function() {

		check_retype_tel();
		
	});
	
	function check_tel() {
	
		var tel_length = $("#form_tel").val().length;
		
		if(tel_length == 0) {
			$("#tel_error_message").html("Veuillez écrire votre numéro de téléphone !");
			$("#tel_error_message").show();
			error_tel = true;
		}
		else {
			if(tel_length < 10) {
				$("#tel_error_message").html("Veuillez écrire 10 chiffres !");
				$("#tel_error_message").show();
				error_tel = true;
			}
			else {
				$("#tel_error_message").hide();
			}
		}
	}

	function check_retype_tel() {
	
		var tel= $("#form_tel").val();
		var retype_tel_length = $("#form_retype_tel").val().length;
		var retype_tel = $("#form_retype_tel").val();
		
		if(retype_tel_length == 0) {
			$("#retype_tel_error_message").html("Veuillez écrire votre numéro de téléphone !");
			$("#retype_tel_error_message").show();
			error_retype_tel = true;
		} else {
			if(retype_tel == tel){
			$("#retype_tel_error_message").hide();
			}
			else {
				$("#retype_tel_error_message").html("Les numéros de téléphone ne correspondent pas !");
				$("#retype_tel_error_message").show();
				error_retype_tel = true;
			}
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

	$('#telChangement_form').submit(function() {

		error_tel = false;							
		error_password = false;
		error_retype_tel = false;
						
		check_tel();
		check_password();
		check_retype_tel();
		
		if(error_tel == false && error_password == false && error_retype_tel == false) {
			return true;
		} else {
			return false;	
		}

	});

});