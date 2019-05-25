<!DOCTYPE html>
<html>
<?php 
?>

<head>

    <script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="view/javascripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="view/Combo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
            h1{font-size: 200%;font-style: normal;}
        h2{font-size: 120%;}
        .form2 {width:70%;margin:0 auto;display:table;margin-top: 8%;background-color: white;padding: 9px; border-radius: 8px;background-color:rgb(255, 255, 255,0.7);transition:0.5s;}
        .form2:hover {padding: 2%;transition:0.5s;margin-top: 1%;}
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
		        <form id=registration_form action = "index.php?cible=offline&action=inscription" method="post">
                <table>
                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_civilite">Civilité :</label>
                                        <input type="radio" name="form_civilite" value="M." checked>M.
                                        <input type="radio" name="form_civilite" value="Mme">Mme<br>
                                    </div>
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_prenom">Prénom :</label>
                                        <input type="text" id="form_prenom" placeholder="" name="form_prenom" maxlength="15"><br>
                                        <span class="error_form" id="prenom_error_message"></span>
                                    </div>
                                     <div id="form2_demi">
                                        <label for="form_nom">Nom :</label>
                                        <input type="text" id="form_nom" placeholder="" name="form_nom" maxlength="25"><br>
                                        <span class="error_form" id="nom_error_message"></span>

                                    </div>
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_tel">Numéro de téléphone :</label>
                                        <input type="tel" placeholder="0611223344" id="form_tel" name="form_tel" maxlength="10"><br>
                                        <span class="error_form" id="tel_error_message"></span>
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
                                             <input type="checkbox" name="form_CGU" id="form_CGU">
                                             <label>J'accepte les <a href = "CGU.php"><u> Conditions générales d'utilisations </u></a>
                                             <br>
                                             <span class="error_form" id="CGU_error_message"></span>
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
