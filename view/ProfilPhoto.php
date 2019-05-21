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

#contenu {margin-top: 3%;align-items: center;align-content: center;}
.Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 18px;padding-bottom: 18px;}
[type="file"] {font-size: 20px;margin-left:8%;position: relative;}
.Ligne img {border-radius: 13px;border-width: 3px;border-color: white;border-style: groove;}
.Ligne button {font-size: 65%; border-radius: 4px;border: 2px solid white; background-color: unset; color:white;}
.Ligne button:hover {opacity: 0.8;background-color: white;color:black;}
.Ligne button:active {background-color: green; color:white;}

</style>

<html>
<body>
	<div id="contenu">
		<div class="Ligne">
			<img src="../view/Images/profil.jpg">
		</div>
		<div class="Ligne">
			<label for="avatar"> Changer sa photo de profil : </label><br/>
		
	        <input type="file" name="avatar"/>
	    </div>
	    <div class="Ligne">
	        <button> Enregistrer </button>
	    </div>
    </div>
</body>
</html>