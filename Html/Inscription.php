<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
        .contenu { margin-right: 40%;}
    </style>
</head>

<body>

    <header>

    </header> <br />

        <div class="contenu">
           
                <h2>Création compte référent</h3>
                <h3>Remplissez les champs suivants</h3>
                    
                        <form method="post" action="../controleurs/ct_inscription.php">
                            <div id = "formulaire">
                                <div id="form_gauche">
                                    <label for="civilite">Civilité :</label>
                                    <input type="radio" id="civilite" name="civilite" value="M." checked>M.
                                    <input type="radio" name="civilite" value="Mme">Mme<br>
                                    <label for="nom">Nom :</label>
                                    <input type="text" id="nom" name="nom" maxlength="25"><br>
                                    <label for="prenom">Prénom :</label>
                                    <input type="text" id="prenom" name="prenom" maxlength="15"><br>
                                </div>
                                <div id="form_droite">
                                    <label for="tel">Numéro de téléphone :</label>
                                    <input type="tel" id="numero_telephone" name="tel" maxlength="10"><br>
                                    <label for="email">Adresse e-mail :</label>
                                    <input type="email" id="email" name="email" maxlength="25"><br>
                                    <label for="mdp">Mot de passe :</label>
                                    <input type="password"  id="mot_de_passe" name="mdp" maxlength="25"><br>
                                    <label for="mdp2">Confirmation du mot de passe :</label>
                                    <input type="password" id="mot_de_passe2" name="mdp2" maxlength="25"><br>
                                    <?php if(isset($_GET["erreurinscription"])) {
                                        echo $_GET["erreurinscription"];
                                    }
                                    ?>
                                </div>
                            </div>
                            <div id="form_bas">
                                 <label>
                                     <input type="checkbox" name="accepterCGU" value="y">J'accepte les conditions générales d'utilisation
                                 </label><br>
                                 <label>
                                     <input id= "button_valider" type="submit" name="check_inscription" value="Créer un compte">
                                 </label><br>
                            </div>
                        </form>                        
                    
    
        </div>

</body>
</html>
