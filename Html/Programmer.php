<!DOCTYPE html>

<?php
	include "Header&Navigation&Footer.php";
?>

<style type="text/css">
		#section {background-color: white; opacity: 0.7;  border-radius: 18%;  text-align: center;display: table; margin: 0 auto;margin-top: 6%;}
		#section a{color:white;}
		#section a:hover{opacity: 0.5;}
		#carre1 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-left-radius: 15%; border-bottom-right-radius:2% ; border-top-right-radius:16% ; border-top-left-radius:33%;}
		#carre2 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-right-radius: 15%; border-bottom-left-radius:2% ; border-top-left-radius:16% ; border-top-right-radius:33%;}
		#carre3 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-left-radius: 15%; border-top-right-radius:2% ; border-bottom-right-radius:16% ; border-bottom-left-radius:33%;}
		#carre4 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-right-radius: 15%; border-top-left-radius:2% ; border-bottom-left-radius:16% ; border-bottom-right-radius:33%;}

</style>

<html>
		<div id = "section">
			<a href = "lumiere.php"><div id = "carre1"><br /><img src="../Images/lumiere.png"  alt="Lumière" width="80"> <br /><h3>Lumière</h3></div></a>
			<a href = "temperature.php"><div id = "carre2"><br /><img src="../Images/temperature.png"  alt="Température" width="80"> <br /><h3>Température</h3></div></a>
			<a href = "volets.php"><div id = "carre3"><br /><img src="../Images/volets.png"  alt="Volets" width="80"> <br /><h3>Volets</h3></div></a>
			<a href = "ventilateur.php"><div id = "carre4"><br /><img src="../Images/ventilateur.png"  alt="Ventilateur" width="80"> <br /><h3>Ventilateur</h3></div></a>
		</div>

</html> 