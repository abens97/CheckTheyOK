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
        h1{font-size: 200%;font-style: normal;}
        h2{font-size: 120%;}
        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}
        .form2 {width:40%;margin-left:65%; auto;display:table;padding-top: 6%;}
        .error_form {font-size: 15px; font-family: Arial; color: #FF0052;}
        #liste_gestionnaire {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:45%;
            height:50%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }
        #add_gestionnaire {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:26%;
            height:30%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 65%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }
        
    </style>
</head>

<html>

    <body>

            <div id="contenu">
                <h1>Bienvenue sur la gestion des gestionnaires </h1>
            </div>    

            <div id="liste_gestionnaire">
                <h1>Liste des gestionnaires</h1>

                <ul>
                    <?php foreach ($gestionnaires as $gestionnaire) { ?>
                        <li>Le gestionnaire possédant l'adresse email <?= $gestionnaire["email_gestionnaire"]; ?> est en charge du logement n°<?= $gestionnaire["debut_plage_logement"]; ?> à <?= $gestionnaire["fin_plage_logement"]; ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div id="add_gestionnaire">
		        <form id=registrationGestionnaire_form action ="index.php?cible=domisep&action=ajouter_Gestionnaire" method="post">
                <table>
                <div id="ligne">

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
                                    <div id="form2_demi">
                                        <label for="form_debut">Début plage de logement :</label>
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
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_fin">Fin plage de logement :</label>
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