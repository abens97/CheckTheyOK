<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=id9649309_bdd_checktheyok;charset=utf8', 'id9649309_groupeapp', 'sarahestmoche');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
// user : id9649309_groupeapp
// mdp : sarahestmoche
?>