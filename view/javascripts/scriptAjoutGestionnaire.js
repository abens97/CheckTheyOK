$(function() {

	$("#prenom_error_message").hide();
	$("#nom_error_message").hide();
	$("#tel_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	$("#email_error_message").hide();
	$("#retype_email_error_message").hide();


	var error_prenom = false;
	var error_nom= false;
	var error_tel= false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;
	var error_retype_email = false;

	$("#prenom_error_message").focusout(function() {

		check_prenom();
		
	});

	$("#nom_error_message").focusout(function() {

		check_nom();
		
	});

	$("#tel_error_message").focusout(function() {

		check_tel();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
	});

	$("#form_email").focusout(function() {

		check_email();
		
	});

	$("#form_retype_email").focusout(function() {

		check_retype_email();
		
	});
	
	function check_prenom() {
	
		var prenom_length = $("#form_prenom").val().length;
		
		if(prenom_length == 0) {
			$("#prenom_error_message").html("Veuillez écrire votre prénom !");
			$("#prenom_error_message").show();
			error_prenom = true;
		} else {
			$("#prenom_error_message").hide();
		}
	
	}

	function check_nom() {
	
		var nom_length = $("#form_nom").val().length;
		
		if(nom_length == 0) {
			$("#nom_error_message").html("Veuillez écrire votre nom !");
			$("#nom_error_message").show();
			error_nom = true;
		} else {
			$("#nom_error_message").hide();
		}
	
	}

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
		
		if(password !=  retype_password) {
			$("#retype_password_error_message").html("Les mots de passe ne correspondent pas !");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
		}
	
	}

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

	function check_retype_email() {

		var email = $("#form_email").val();
		var retype_email = $("#form_retype_email").val();

		if(email != retype_email) {
			$("#retype_email_error_message").html("Les e-mails ne correspondent pas !");
			$("#retype_email_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_email_error_message").hide();
		}	
	}

	$("#registrationGestionnaire_form").submit(function() {

		error_prenom = false;
		error_nom = false;
		error_tel = false;							
		error_password = false;
		error_retype_password = false;
		error_email = false;
		error_retype_email = false;
						
		check_prenom();
		check_nom();
		check_tel();
		check_password();
		check_retype_password();
		check_email();
		check_retype_email();
		
		if(error_prenom == false && error_nom == false && error_tel == false && error_password == false && error_retype_password == false && error_email == false && error_retype_email == false) {
			return true;
		} else {
			return false;	
		}

	});

});