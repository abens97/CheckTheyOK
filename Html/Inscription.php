<!DOCTYPE html>
<html>
<?php include "Header&FooterHorsConnexion.php";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>

    <style type="text/css">

        #formulaire {max-width:800px;margin:0 auto;width:100%;}
        #ligne {width: 100%;font-family:"Jazz LET"; font-size: 27px;text-shadow:4px 4px 6px black;}
        .Nettoyer { content: "";display: table;clear: both;}
        #erreur {color:red;}
        #form_demi, #form_bas  {float: left;position: relative;width:100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;padding-left: 30px;padding-right: 30px;padding-bottom: 16px;}
        @media only screen and (min-width: 48em) { #form_demi {width: 50%;}}
        #contenu {align-items: center; margin: 0 auto;}
        #ligne input.value i {color:grey;}
        
    </style>
</head>

<body>

        
            <div id="contenu">
                <h2>Création de compte </h2>
                <h3>Remplissez les champs suivants</h3>
            </div>     
                        <form method="post" action="../controleurs/ct_inscription.php">
                            <div id = "formulaire" class="Nettoyer">

                                <div id="ligne">
                                    <div id="form_demi">
                                        <label for="civilite">Civilité :</label>
                                        <input type="radio" id="civilite" name="civilite" value="M." checked>M.
                                        <input type="radio" name="civilite" value="Mme">Mme<br>
                                    </div>
                                    <div id="form_demi">
                                        <label for="type">Type de compte :</label>
                                        <input type="text" id="type" name="type" maxlength="15" value="Résident..."><br>
                                    </div>
                                </div>
                                <div id="ligne">
                                    <div id="form_demi">
                                        <label for="nom">Nom :</label>
                                        <input type="text" id="nom" name="nom" maxlength="25"><br>
                                    </div>
                                    <div id="form_demi">
                                        <label for="prenom">Prénom :</label>
                                        <input type="text" placeholder='Votre prénom' id="prenom" name="prenom" maxlength="15" value="<?php if(isset($prenom)) {echo $prenom;}?>"  ><br>
                                    </div>
                                </div>
                                <div id="ligne">
                                    <div id="form_demi">
                                        <label for="tel">Numéro de téléphone :</label>
                                        <input type="number" placeholder='0601020304' id="numero_telephone" name="tel" maxlength="10"><br>
                                    </div>
                                    <div id="form_demi">
                                        <label for="email">Adresse e-mail :</label>
                                        <input type="email" id="email" name="email" maxlength="25"><br>
                                    </div>
                                    <div id="form_demi">
                                        <label for="email">Confirmation de votre e-mail :</label>
                                        <input type="email" id="email2" name="email2" maxlength="25"><br>
                                    </div>                                  
                                </div>
                                <div id="ligne">
                                    <div id="form_demi">
                                        <label for="mdp">Mot de passe :</label>
                                        <input type="password"  id="mot_de_passe" name="mdp" maxlength="25"><br>
                                    </div>
                                    <div id="form_demi">
                                        <label for="mdp2">Confirmation du mot de passe :</label>
                                        <input type="password" id="mot_de_passe2" name="mdp2" maxlength="25"><br>
                                        <div id="erreur">
                                        <?php if(isset($_erreur)) {
                                            echo $erreur;
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div> 
                                <div id="ligne">            
                                    <div id="form_bas">
                                         <label>
                                             <input type="checkbox" name="accepterCGU" value="y">J'accepte les <a href = "CGUHC.php"><u> Conditions générales d'utilisation </u></a>
                                         </label><br>
                                    </div>
                                    <div id="form_bas">
                                         <label>
                                             <input id= "button_valider" type="submit" name="check_inscription" value="Créer un compte">
                                         </label><br>
                                    </div>
                                </div>
                            </div>
                        </form>     

                                       
                    
    
      

</body>
</html>
