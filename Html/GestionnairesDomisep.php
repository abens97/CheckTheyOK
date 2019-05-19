<!DOCTYPE html>

<?php
?>

<head>

    <script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="Combo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
        h1{font-size: 200%;font-style: normal;}
        h2{font-size: 120%;}
        #contenu{ margin:0 auto;display:table;align-items: center;text-align: center;}
        [type="number"] {padding: 0;}
        .form2 {width:40%;margin-left:65%; auto;display:table;padding-top: 6%;}
        
        
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

            <div class='form2'>
		        <form id=registration_form action ="index.php?cible=ct_domisep&action=ajouter_Gestionnaire" method="post">
                <table>
                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_nom">Nom :</label>
                                        <input type="text" id="form_nom" placeholder="" name="form_nom" maxlength="25"><br>
                                        <span class="error_form" id="nom_error_message"></span>
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
                                    <div id="form2_demi">
                                        <label for="form_email">Adresse e-mail :</label>
                                        <input type="email" id="form_email" placeholder="Adresse@email.com" name="form_email" maxlength="30"><br>
                                        <span class="error_form" id="email_error_message"></span>
                                    </div>
                                </div>

                                <div id="ligne">
                                    <div id="form2_demi">
                                        <label for="form_password">Mot de passe :</label>
                                        <input type="password"  id="form_password" placeholder="****" name="form_password" maxlength="25"><br>
                                        <span class="error_form" id="password_error_message"></span>
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