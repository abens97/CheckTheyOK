<?php
    if(isset($_POST['Connexion'])){
        $email=htmlspecialchars($_POST['identifiant']);
        $motdepasse=sha1($_POST['mdp']);
        echo $motdepasse;
    }
?>