<!DOCTYPE html>

<?php 
?>

<style type="text/css">
        
        #contenu {margin-top: 12%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        .Ligne [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        .Ligne [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        .Ligne [type="submit"]:active {background-color: green; color:white;}
        .Ligne input {width: 180px;}
        #mdpenvoye {text-align: center; margin:0 auto;font-size: 2.2em;display: none; color: limegreen; width: 65%;}

</style>

</head>

<body>
    <div id="contenu">
        <div class="Ligne">
            <form method="post" >
                <label for="e-mail">Saisissez votre adresse e-mail :</label>                 
                <input type="text" id="emailmdp" name="emailmdp">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitMdp" name="Submit_ReinitMdp" onclick="document.getElementById('mdpenvoye').style.display = 'table'">&#10143 Réinitialiser son mot de passe</button>
        </div>
        <div id="mdpenvoye">
                Demande de mot de passe effectuée ! Vous allez bientôt recevoir un e-mail décrivant les démarches à suivre
        </div>
    </div>
</body>
</html>
