<!DOCTYPE html>

<?php
?>

<head>

    <script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="view/javascripts/scriptAjoutGestionnaire.js"></script>
    <link rel="stylesheet" type="text/css" href="view/Combo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
    h1 {text-align: center;}
    #z {display : table;}
        #add_gestionnaire 
        #liste_gestionnaire:hover {padding: 2%;transition:0.5s;margin-top: 18%;margin-left: 22.5%;}
        #add_gestionnaire:hover {padding: 1%;transition:0.5s;margin-top: 2%;}
        #ligne {padding-left:6%;width: 100%; font-size: 80%;}
        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}
        #form2_bas {padding-top: 6%;font-style: normal;}
        #form2_bas a {color:white;font-style: italic; }
        #form2_bas [type="submit"] {margin-left: 25%; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset; color:white;}
        #form2_bas [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        #form2_bas [type="submit"]:active {background-color: green; color:white;}

        #form2_bas  [type="checkbox"] {transform:scale(2.0);}
        #form2_bas  label {margin-left: 4%;}
        #form2_demi label {font-family:"Century Gothic";font-style: normal;  }
        
        #form2_demi, #form2_bas  {float: left;width:20%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-cell;padding-top: 1%;}input, button {opacity: 0.8;font-family: normal;}
        input, button {opacity: 0.8;font-family: normal;}
        @media only screen and (min-width: 48em) { #form2_demi {width: 25%;}}
        #liste_gestionnaire {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            height:30%;
            background-color: white;
            margin-left: 30%;
            margin-top: 16%;
            padding: 1%;
            align-content: center;
            border-width:5px;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }
        #add_gestionnaire {margin:0 auto;display:table;margin-top: 8%;padding: 9px; border-radius: 8px;background-color:rgb(255, 255, 255,0.7);transition:0.5s;
            width:55%;
            height:30%;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin : auto;
            margin-top: 3%;
            border-color:#82A898;
            color:grey;
            border-radius : 10px;
            opacity: 0.9;
        }
        
    </style>
</head>

<html>

    <body>

        <div id="z">
            <div id="liste_gestionnaire">
                <h1> &#x21E9 Liste des gestionnaires</h1>

                <ul>
                    <?php foreach ($gestionnaires as $gestionnaire) { ?>
                        <li>Le gestionnaire possédant l'adresse email <?= $gestionnaire["email"]; ?> est en charge du logement n°<?= $gestionnaire["debut_plage_logement"]; ?> à <?= $gestionnaire["fin_plage_logement"]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
            <div id="add_gestionnaire">
		        <form id=registrationGestionnaire_form action ="index.php?cible=domisep&action=ajouter_Gestionnaire" method="post">
               
                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_debut">Début plage de logement :</label>
                                    </div>
                                    <div id="form2_demi">
                                        <select name="form_debut">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select><br>
                                        <span class="error_form" id="nom_error_message"></span>
                                    </div>
                                    
                                    <div id="form2_demi">
                                        <label for="form_fin">Fin plage de logement :</label>
                                    </div>
                                    <div id="form2_demi">
                                        <select name="form_fin">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select><br>
                                        <span class="error_form" id="nom_error_message"></span>
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
                                    <div id="form2_demi">
                                        <label for="form_tel">Numéro de téléphone :</label>
                                        <input type="tel" placeholder="0611223344" id="form_tel" name="form_tel" maxlength="10"><br>
                                        <span class="error_form" id="tel_error_message"></span>
                                    </div>  
                                    <div id="form2_bas">
                                         <label>
                                             <button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Valider</button>
                                         </label><br>
                                    </div>
                                </div>


        </form>

    </body>

</html>