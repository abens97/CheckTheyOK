<!DOCTYPE html>

<?php
	session_start();
	
    if(isset($_SESSION['email'])){
		include 'Header&Navigation&Footer.php';
	}
    else {
		header('Location:Accueil.php');
	}
?>
<style type="text/css">

</style>

<html>

<!--Mettre ici le contenu de nos pages-->

</html>