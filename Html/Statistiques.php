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
#Escalier {
border: 4px solid lightgrey;
border-radius: 4px;
width:50%;
overflow: hidden
;margin: 0 auto;
height :60%;
}

</style>

<html>
<div id="Escalier">
	<img src="../Images/esc.jpg">
</div>

<!--Mettre ici le contenu de nos pages-->

</html>
