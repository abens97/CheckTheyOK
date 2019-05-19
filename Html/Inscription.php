<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>
<head>
    <link rel="stylesheet" type="text/css" href="Combo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
        h1{font-size: 200%;font-style: normal;}
        h2{font-size: 120%;}
        .form2 {width:70%;margin:0 auto;display:table;margin-top: 8%;background-color: white;padding: 9px; border-radius: 8px;background-color:rgb(255, 255, 255,0.7);transition:0.5s;}
        .form2:hover {padding: 2%;transition:0.5s;margin-top: 6%;}
        #ligne {padding-left:6%;width: 100%; font-size: 140%;text-shadow:0px 2px 5px grey, 0px -2px 5px grey, 2px 0px 3px grey, -2px 0px 4px grey;}
        
        

        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}

        #form2_bas {padding-top: 6%;font-style: normal;}
        #form2_bas a {color:white;font-style: italic;font-size-adjust: 80%; }
        #form2_bas [type="submit"] {margin-left: 25%; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset; color:white;}
        #form2_bas [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        #form2_bas [type="submit"]:active {background-color: green; color:white;}

        #form2_bas  [type="checkbox"] {transform:scale(2.0);}
        #form2_bas  label {margin-left: 4%;}
        #form2_demi label {font-family:"Century Gothic";font-style: normal;  }
        
        #form2_demi, #form2_bas  {float: left;width:50%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-cell;padding-top: 1%;}input, button {opacity: 0.8;font-family: normal;}
        input, button {opacity: 0.8;font-family: normal;}
        @media only screen and (min-width: 48em) { #form2_demi {width: 50%;}}
        #form2-messages{background-color : rgb(255,232,232);border: 1px solid red;color:red;display:none;font: size 12px;font-weight: bold;margin-bottom: 10px;padding: 10px 25px;max-width: 250px;}      
    </style>
    
</head>

<body>

            <div id="contenu">
                <h1>Bienvenue sur la création de compte </h1>
                <h2>Veuillez remplir le formulaire d'inscription</h2>
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
                        <div class="dropdown">
                            <select name="one" class="dropdown-select">
                                <option value=""><i>-- Selectionner --</i></option>
                                <option value="1">Résident</option>
                                <option value="2">Référent</option>
                                <option value="3">Administrateur</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="ligne">
                    <div id="form2_demi">
                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" placeholder="Jean" name="prenom" maxlength="15"><br>
                    </div>
                    <div id="form2_demi">
                        <label for="nom">Nom :</label>
                         <input type="text" id="nom" placeholder="Émarre" name="nom" maxlength="25"><br>
                    </div>
                </div>

                <div id="ligne">
                    <div id="form2_demi">
                        <label for="tel">Numéro de téléphone :</label>
                        <input type="text" placeholder="XX.XX.XX.XX.XX" id="tel" name="tel" maxlength="10"><br>
                    </div>
                    <div id="form2_demi">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" id="pseudo" placeholder="Utilisateur" name="pseudo" maxlength="15"><br>
                    </div>                                
                </div>

                <div id="ligne">
                    <div id="form2_demi">
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" id="Email" placeholder="Adresse@email.com" name="Email" maxlength="30"><br>
                    </div>
                    <div id="form2_demi">
                        <label for="email">Confirmation de votre e-mail :</label>
                        <input type="email" id="Email2" placeholder="Adresse@email.com" name="Email2" maxlength="30"><br>
                    </div>                                  
                </div>

                <div id="ligne">
                    <div id="form2_demi">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password"  id="mdp" placeholder="******" name="mdp" maxlength="25"><br>
                    </div>
                    <div id="form2_demi">
                        <label for="mdp2">Confirmation du mot de passe :</label>
                        <input type="password" id="mdp2" placeholder="******"name="mdp2" maxlength="25"><br>
                        <div id="erreur"></div>
                    </div>
                </div> 

                <div id="ligne">            
                    <div id="form2_bas">
                        <input type="checkbox" name="accepterCGU" value="y">
                        <label>J'accepte les <a href = "CGUHC.php"><u> Conditions générales d'utilisations </u></a></label><br>
                    </div>
                    <div id="form2_bas">
                        <button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Valider</button><br>
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
