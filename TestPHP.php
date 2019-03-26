<?php
    $nombre = 10;
    $nom = 'Sarah';
    $fruit = Array();
    $fruit[0] = "Pomme";
    $fruit[1] = "Poire";
    echo $nombre.'<br />';
    echo $fruit[0].'<br />'.$fruit[1].'<br />';
    echo $nom. '<br />'.'<br />';
    
    if ($nombre < 10 && $nombre >=0) {
        echo 'Nombre compris entre 0 et 9';
    }
    elseif ($nombre == 10) {
        echo 'Nombre egal a 10';
    }
    elseif ($nombre > 10) {
        echo 'Nombre superieure a 10';
    }
    else {
        echo 'Nombre inferieur a 0! Tu fais quoi la?';
    }

    echo '<br />';
    echo '<br />';

    switch($nom) {
        case 'Pierre' :
        echo 'Votre nom est Pierre';
        break;
        case 'Pauline' :
        echo 'Votre nom est Pauline';
        break;
        case 'Arthur' :
        echo 'Votre nom est Arthur';
        break;
        case 'Sarah' :
        echo 'Votre nom est Sarah';
        break;
    }
    echo '<br />';
    echo '<br />';
    
    $date_du_jour = date('d-m-Y');
    $heure_du_jour = date('H:i');
    echo 'On est le ' .$date_du_jour. ' et il est '.$heure_du_jour;

   /* $fp = fopen("donnees.txt",'r');
    $contenu_du_fichier = fgets($fp,200);
    fclose($fp);
    echo 'Votre fichier contient '.$contenu_du_fichier; */

    
?>