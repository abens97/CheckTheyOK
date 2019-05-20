<!DOCTYPE html>

<?php 
?>

<style type="text/css">
        
        #contenu {margin-top: 12%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        [type="submit"]:active {background-color: green; color:white;}
        input {width: 180px;}

</style>

</head>

<body>
    <div id="contenu">
        <div class="Ligne">
            <form method="post" action="mdpenvoye.php">
                <label for="id">Saisissez votre identifiant :</label>
                <input type="text" id="ID" name="ID">                
            </form> 
        </div>
        <div class="Ligne">
            <form method="post" action="mdpenvoye.php">
                <label for="e-mail">Saisissez votre adresse e-mail :</label>                 
                <input type="text" id="emailmdp" name="emailmdp">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitMdp" name="Submit_ReinitMdp">&#10143 Réinitialiser son mot de passe</button>
        </div>
    </div>
</body>
</html>
