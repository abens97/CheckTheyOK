<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">
        .contenu {text-align: center; margin:0 auto;}
    </style>
</head>

<body>

    <header>

    </header> <br />

        <div class="contenu">
            <section>
                <h2>Création compte référent</h3>
                <h3>Remplissez les champs suivants</h3>
                    <article>
                        <form method="post" action="inscription.php">
                            <div id = "formulaire">
                                <div id="form_gauche">
                                    <label for="civilite">Civilité :</label>
                                    <input type="radio" name="civilite" value="M.">M.
                                    <input type="radio" name="civilite" value="Mme">Mme<br>
                                    <label for="prenom">Prénom :</label>
                                    <input type="text" name="prenom" maxlength="15"><br>
                                    <label for="nom">Nom :</label>
                                    <input type="text" name="nom" maxlength="25"><br>
                                    <label for="clé_id">Clé d'identification :</label>
                                    <input type="text" name="clé_id" maxlength="25" ><br>
                                </div>
                                <div id="form_droite">
                                    <label for="tel">Numéro de téléphone :</label>
                                    <input type="tel" name="tel" maxlength="10"><br>
                                    <label for="email">Adresse e-mail :</label>
                                    <input type="email" name="email" maxlength="25"><br>
                                    <label for="mdp">Mot de passe :</label>
                                    <input type="password" name="mdp" maxlength="25"><br>
                                    <label for="mdp2">Confirmation du mot de passe :</label>
                                    <input type="password" name="mdp2" maxlength="25"><br>
                                </div>
                            </div>
                            <div id="form_bas">
                                 <label>
                                     <input type="checkbox" name="accepterCGU" value="y">J'accepte les conditions générales d'utilisation
                                 </label><br>
                                 <label>
                                     <input id= "button_valider" type="button" name="check_inscription" value="Créer un compte">
                                 </label><br>
                            </div>
                        </form>                        
                    </article>
            </section>
        </div>

</body>
</html>
