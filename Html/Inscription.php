<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>

<head>

    <script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="Combo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
        h1{font-size: 200%;font-style: normal;}
        h2{font-size: 120%;}
        .form2 {width:70%;margin:0 auto;display:table;padding-top: 6%;}
        #ligne {padding-left:6%;width: 100%; font-size: 140%;text-shadow:0px 2px 5px grey, 0px -2px 5px grey, 2px 0px 3px grey, -2px 0px 4px grey;}
        
        

        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}

        #form2_bas {padding-top: 6%;font-style: normal;}
        #form2_bas a {color:white;font-style: italic;font-size-adjust: 80%; }
        #form2_bas [type="submit"] {margin-left: 25%; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;}
        #form2_bas [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        #form2_bas [type="submit"]:active {background-color: green; color:white;}

        #form2_bas  [type="checkbox"] {transform:scale(2.0);}
        #form2_bas  label {margin-left: 4%;}
        #form2_demi label {font-family:"Century Gothic";font-style: normal;  }
        
        #form2_demi, #form2_bas  {float: left;width:50%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-cell;padding-top: 1%;}input, button {opacity: 0.8;font-family: normal;}
        input, button {opacity: 0.8;font-family: normal;}
        @media only screen and (min-width: 48em) { #form2_demi {width: 50%;}}
        #form2-messages{background-color : rgb(255,232,232);border: 1px solid red;color:red;display:none;font: size 12px;font-weight: bold;margin-bottom: 10px;padding: 10px 25px;max-width: 250px;}
        .error_form {font-size: 15px; font-family: Arial; color: #FF0052;}
        
    </style>
</head>

<body>

        
            <div id="contenu">
                <h1>Bienvenue sur la création de compte </h1>
                <h2>Veuillez remplir le formulaire d'inscription</h2>
            </div>     

            <div class='form2'>
		        <form id=registration_form action ="../controleurs/ct_inscription.php" method="post">
                <table>
                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="civilite">Civilité :</label>
                                        <input type="radio" id="civilite" name="civilite" value="M." checked>M.
                                        <input type="radio" name="civilite" value="Mme">Mme<br>
                                    </div>
                                    <div id="form2_demi">
                                        <label for="type">Type de compte :</label>
                                         <div class="dropdown">
                                            <select name="one" class="dropdown-select" id='type'>
                                              <option value=""><i>-- Selectionner --<i></option>
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
                                        <label for="form-username">Pseudo :</label>
                                        <input type="text" id="form_username" placeholder="Utilisateur" name="form_username" maxlength="15"><br>
                                        <span class="error_form" id="username_error_message"></span>
                                    </div>                                
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_email">Adresse e-mail :</label>
                                        <input type="email" id="form_email" placeholder="Adresse@email.com" name="form_email" maxlength="30"><br>
                                        <span class="error_form" id="email_error_message"></span>
                                    </div>
                                    <div id="form2_demi">
                                        <label for="form_retype_email">Confirmation de votre e-mail :</label>
                                        <input type="email" id="form_retype_email" placeholder="Adresse@email.com" name="form_retype_email" maxlength="30"><br>
                                        <span class="error_form" id="retype_email_error_message"></span>
                                    </div>                                
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_password">Mot de passe :</label>
                                        <input type="password"  id="form_password" placeholder="******" name="form_password" maxlength="25"><br>
                                        <span class="error_form" id="password_error_message"></span>
                                    </div>
                                    <div id="form2_demi">
                                        <label for="form_retype_password">Confirmation du mot de passe :</label>
                                        <input type="password" id="form_retype_password" placeholder="******"name="form_retype_password" maxlength="25"><br>
                                        <span class="error_form" id="retype_password_error_message"></span>
                                    </div>
                                </div> 

                                <div id="ligne">            
                                    <div id="form2_bas">
                                         
                                             <input type="checkbox" name="accepterCGU" id="accepterCGU" value="y">
                                             <label>J'accepte les <a href = "CGU.php"><u> Conditions générales d'utilisations </u></a>
                                         </label><br>
                                    </div> 
                                    <div id="form2_bas">
                                         <label>
                                             <button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Valider</button>
                                         </label><br>
                                    </div>
                                </div>
                            </div>
                </table>
                </form>

</body>

</html>
