<?php 

function changeMdp(){
    
    $ok=false;
    $ancienMdp = $_POST["ancien_mdp"];
    $nouveauMdp = $_POST["nouveau_mdp"];
    $confirmMdp = $_POST["confirm_mdp"];

    if($_POST["ancien_mdp"] && $_POST["nouveau_mdp"] === $_POST["confirm_mdp"]){
        $resultat = getUserlog($_SESSION["email"]);
        if($ancienMdp == )
        $Correct = password_verify($_POST["ancien_mdp"], $resultat["mot_de_passe"]);

            if($ok)
            {
                $mdp = sha1($nouveauMdp);
                changementMdp($_SESSION["email"],$mdp);
                echo "mot de passe changé";
                echo '<br>';
            }
            else
            {
                echo "non changé";
            }
        }
    }   
}