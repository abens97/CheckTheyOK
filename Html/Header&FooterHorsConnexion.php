<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>
    <style type="text/css">
        @keyframes slideIn {from{}to{transform:translateX(0);transform:translateY(0);}}
 		body {margin:0 auto;background-color: #000000; color: white; height:100%;width: 100%; background: url(../Images/H.jpg);background-size:cover;display : table;  }
		header { margin:0 auto;text-align: center;background-color: white; opacity: 0.7; display :table-header-group; left:0; top:0;}
		#Head1{float : left;margin-left: 0.5%; margin-top: 0.85%; color: black;transform:translateX(-100rem);animation: slideIn 0.5s forwards;}
		#Head1 p{font-family: "Jazz LET", fantasy; padding:0;}
		#Head1 img{border-radius: 18px;}
        
		#Head2{ width:40%;margin: 0 auto;color: black;transform:translateY(-100rem);animation: slideIn 0.5s forwards;}
		#Head2 p{font-family: "Jazz LET", fantasy; font-size: 1.9em;}
		.form {margin-right:1.3%;float:right;color: black;margin-top:4%;font-size: 0.9em;transform:translateX(100rem);animation: slideIn 0.5s forwards;}
		.form button {font-size: 1.1em;}
		.form img {border-radius: 18px;}
		.form a{margin-right: 13%;margin-left: 14%;text-decoration: none;text-shadow:2px 6px 3px grey;}
        #form-messages{background-color : rgb(255,232,232);border: 1px solid red;color:red;display:none;font: size 12px;font-weight: bold;margin-bottom: 10px;padding: 10px 25px;max-width: 250px;}
        footer {margin:0 auto;text-align: center;opacity: 0.7; width: 100%; background-color: white; bottom: 0; left: 0; right: 0; position:absolute; color:black;display : table-row;}
        #Footer2 {margin:0 auto;height: 100%;}
        #Footer2 img{display : flex; align-items:center; float: left; padding-left: 20px;}
        #Footer3 {display : flex; align-items:center;}
        #Footer3 p {margin-left: 1%;float: left; padding-right: 20%;}
        #Footer3 a {padding-right:1%;padding-left:1%;}
        #FooterReseaux {display : flex; align-items:center;justify-content : center; padding-left: 15%;}
        #FooterReseaux img{border-radius : 50%;padding-left: 20px;padding-right: 20px;}

    </style>
</head>

<body>

<header>
	<div id ="Head1">
			<a href="Accueil.php"><img src = "../Images/logobase.png" alt="Logo" width="70"></a>
            <p>Check They're Ok !<p>     
    </div>
    <div class='form'>
		<ul id='form-messages'></ul>
		<label for="Email">Email</label>
		<input type="email" id='E-mail' spellcheck="false">

		<label for="mdp">Mot de passe</label>
		<input type="password" id='modp' name='modp'>
		<b>|</b>
		<button type='submit' id='btn-submit'>Login</button>
			
			<br>
			<a href = "Inscription.php">  <i>S'inscrire  ?</i></a>	
            <a href = "mdp.php">  <i>Mot de passe oublié ?</i></a>
            <br>

	</div>
        <div id="Head2"> <br />
            <?php if (basename($_SERVER['PHP_SELF'])=='CGU.php'):?>
			<p> Conditions Générales d'Utilisations </p>
			<?php elseif (basename($_SERVER['PHP_SELF'])=='Accueil.php'):?>
			<p> Accueil </p>
			<?php elseif (basename($_SERVER['PHP_SELF'])=='Contact.php'):?>
			<p> Contact </p>
			<?php elseif (basename($_SERVER['PHP_SELF'])=='FAQ.php'):?>
			<p> FAQ </p>
			<?php elseif (basename($_SERVER['PHP_SELF'])=='mdp.php'):?>
			<p> Mot de passe oublié ? </p>
			<?php elseif (basename($_SERVER['PHP_SELF'])=='mdpenvoye.php'):?>
			<p> Mot de passe envoyé </p>
            <?php elseif (basename($_SERVER['PHP_SELF'])=='Inscription.php'):?>
			<p> Inscription </p>
			<?php endif ?>	
		</div>
	</header> <br />

    <footer>
            <br />
            <div id="Footer2">
            <a href = "https://www.isep.fr" target="_blank"><img src = "../Images/Isep.png" alt="Isep" width="90"></a> 
            <img src = "../Images/LogoDomisep.png" alt="Domisep" width="100" > 
            <i>Équipe de techniciens : Sarah DA COSTA - Pauline MILLOT - Leny BELAMICH - Romain POLO - Arthur GORGE BERNAT - Amine BENSOUDA <i>
            </div>
            <br />
            <HR align=center>
            <div id = "Footer3">
                <p><i>CheckThey'reOK© 2018-2019</i></p>   -
                <a href = "FAQ.php"><u> FAQ </u></a> -
                <a href = "mailto:groupeapp8a@gmail.com"><u>Nous contacter</u></a> -
                <a href = "CGU.php"><u> Conditions générales d'utilisation </u></a> -
                <div id = "FooterReseaux">
                    <div> 
                            <a href = "http://www.twitter.com" target="_blank"><img src = "../Images/twitter.png" width=40"></a> <br />
                            Twitter
                    </div>
                    <div>
                            <a href = "http://www.instagram.com" target="_blank"><img src = "../Images/instagram.png" width="40"></a> <br />
                            Instagram
                    </div>
                    <div>
                            <a href = "http://www.facebook.com" target="_blank"><img src = "../Images/facebook.png" width="40"></a> <br />
                            Facebook
                    </div>
                    <br />
                </div>
            </div>
    </footer>
    <script>
		const form ={
			Email: document.getElementById('E-mail'),
			Motdepasse: document.getElementById('modp'),
			submit: document.getElementById('btn-submit'),
			messages: document.getElementById('form-messages'),
		};

		form.submit.addEventListener('click',() => {
			const request =new XMLHttpRequest();

			request.onload =() => {
				let responseObject = null;
				try{
					responseObject = JSON.parse(request.responseText);
				} catch(e) {
					console.error('Could not parse JSON!');
				}
				if (responseObject){
					handleResponse(responseObject);
				}
			}
			const requestData =`E-mail=${form.Email.value}&modp=${form.Motdepasse.value}`;
			request.open('post',"../controleurs/ct_connexion.php");
			request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			request.send(requestData);
		
		});

		function handleResponse (responseObject) {
			if(responseObject.ok){
				location.href='Programmer.php';
			} else{
				while (form.messages.firstChild) {
					form.messages.removeChild(form.messages.firstChild);
				}
				responseObject.messages.forEach((message)  => {
					const li = document.createElement('li');
					li.textContent = message;
					form.messages.appendChild(li);
				});
				form.messages.style.display ='block';
			}
		}
	</script>
	</body>
</html>