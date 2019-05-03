<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">

        .form2 {max-width:800px;margin:0 auto;width:100%;}
        #ligne {width: 100%;font-family:"Jazz LET"; font-size: 27px;text-shadow:4px 4px 6px black;}
        .form2 { content: "";display: table;clear: both;}
        #erreur {color:red;}
        #form2_demi, #form2_bas  {float: left;position: relative;width:100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding-left: 30px;padding-right: 30px;padding-bottom: 16px;}
        @media only screen and (min-width: 48em) { #form2_demi {width: 50%;}}
        #contenu {align-items: center; margin: 0 auto;}
        #ligne input.value i {color:grey;}
        #form2-messages{background-color : rgb(255,232,232);border: 1px solid red;color:red;display:none;font: size 12px;font-weight: bold;margin-bottom: 10px;padding: 10px 25px;max-width: 250px;}
        
    </style>
</head>

<body>

        
            <div id="contenu">
                <h2>Création de compte </h2>
                <h3>Remplissez les champs suivants</h3>
            </div>     

            <div class='form2'>
		        <ul id='form2-messages'></ul> 
                    <div id="ligne">
                        <div id="form2_demi">
                            <label for="civilite">Civilité :</label>
                            <input type="radio" id="civilite" name="civilite" value="M." checked>M.
                            <input type="radio" name="civilite" value="Mme">Mme<br>
                        </div>

                        <div id="form2_demi">
                        <label for="type">Type de compte :</label>
                        <input type="text" id="type" name="type" maxlength="15" value="Résident..."><br>
                        </div>
                    </div>

                    <div id="ligne">
                        <div id="form2_demi">
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" maxlength="25"><br>
                        </div>

                        <div id="form2_demi">
                            <label for="prenom">Prénom :</label>
                            <input type="text" placeholder='Votre prénom' id="prenom" name="prenom" maxlength="15" value="<?php if(isset($prenom)) {echo $prenom;}?>"  ><br>
                        </div>
                    </div>

                    <div id="ligne">
                        <div id="form2_demi">
                            <label for="tel">Numéro de téléphone :</label>
                            <input type="number" placeholder='0601020304' id="tel" name="tel" maxlength="10"><br>
                        </div>

                        <div id="form2_demi">
                            <label for="Email">Adresse e-mail :</label>
                            <input type="email" id="Email" name="Email" maxlength="25"><br>
                        </div>
                                    
                        <div id="form2_demi">
                            <label for="Email">Confirmation de votre e-mail :</label>
                            <input type="email" id="Email2" name="Email2" maxlength="25"><br>
                        </div>                                  
                    </div>

                    <div id="ligne">
                        <div id="form2_demi">
                            <label for="mdp">Mot de passe :</label>
                            <input type="password"  id="mdp" name="mdp" maxlength="25"><br>
                        </div>

                        <div id="form2_demi">
                            <label for="mdp2">Confirmation du mot de passe :</label>
                            <input type="password" id="mdp2" name="mdp2" maxlength="25"><br>
                        </div>
                    </div> 

                    <div id="ligne">            
                        <div id="form2_bas">
                            <label>
                                <input type="checkbox" name="accepterCGU" value="y">J'accepte les <a href = "CGUHC.php"><u> Conditions générales d'utilisation </u></a>
                            </label><br>
                        </div>

                        <div id="form2_bas">
                            <label>
                                <button id= "btn-submit2" type="submit" name="btn-submit2" >Créer un compte</button>
                            </label><br>
                        </div>
                    </div>
                </div>


                             
    <script>
		const form2 ={
			nom: document.getElementById('nom'),
            prenom: document.getElementById('prenom'),
            numero_telephone: document.getElementById('tel'),
			Email: document.getElementById('Email'),
			Email2: document.getElementById('Email2'),
			MotdePasse: document.getElementById('mdp'),
			MotdePasse2: document.getElementById('mdp2'),
			submit: document.getElementById('btn-submit2'),
			messages: document.getElementById('form2-messages'),
		};

		form2.submit.addEventListener('click',() => {
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
			const requestData =`nom=${form2.nom.value}&prenom=${form2.prenom.value}&tel=${form2.numero_telephone.value}&Email=${form2.Email.value}&Email2=${form2.Email2.value}&mdp=${form2.MotdePasse.value}&mdp2=${form2.MotdePasse2.value}`;
			request.open('post',"../controleurs/ct_inscription.php");
			request.setRequestHeader('Content-type','application/x-www-form2-urlencoded');
			request.send(requestData);
		
		});

		function handleResponse (responseObject) {
			if(responseObject.ok){
				location.href='Programmer.php';
			} else{
				while (form2.messages.firstChild) {
					form2.messages.removeChild(form2.messages.firstChild);
				}
				responseObject.messages.forEach((message)  => {
					const li = document.createElement('li');
					li.textContent = message;
					form2.messages.appendChild(li);
				});
				form2.messages.style.display ='block';
			}
		}
	</script>
                                       
                    
    
      

</body>
</html>
