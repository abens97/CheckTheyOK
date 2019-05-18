<?php 

function changeMdp(){
    $ok=false;
    $ancienMdp = $_POST["ancien_mdp"];
    $nouveauMdp = $_POST["nouveau_mdp"];
    $confirmMdp = $_POST["confirm_mdp"];
    
    if($_POST["ancien_mdp"] && $_POST["nouveau_mdp"] === $_POST["confirm_mdp"]){
        $resultat = getUserlog($_SESSION["email"]);
        if()
        $Correct = password_verify($_POST["ancien_mdp"], $resultat["mot_de_passe"]);

            if($ok)
            {
                $mdp_hache = password_hash($_POST["nouveau_mdp"], PASSWORD_DEFAULT);
                $nouveau_mdp = htmlspecialchars($mdp_hache);
                changementMdp($_SESSION["email"],$nouveau_mdp);
                echo "mot de passe changé";
                echo '<br>';
                header("refresh:2;url=index.php?action=goto_accueil");
            }
            else
            {
                echo "non changé";
            }
        }
    }   
}