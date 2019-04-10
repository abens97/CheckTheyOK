<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=bdd_checktheyok', 'root', 'WNw:6Evp');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>