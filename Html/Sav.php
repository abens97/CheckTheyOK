<!DOCTYPE html>

<?php
	session_start();
	
  if(isset($_SESSION['email'])){
		include 'Header&Navigation&Footer.php';
	}
  else {
		header('Location:index.php?cible=ct_connexion');
	}
?>

<style type="text/css">
#Construction {
border: 4px solid lightgrey;
border-radius: 4px;
width:34%;
overflow: hidden;
margin: 0 auto;
height :60%;
}

</style>

<html>
<div id="Construction">
	<img src="Images/pageConstruction.png">
</div>

<!--Mettre ici le contenu de nos pages-->

</html>