
<?php
	session_start();
	require ("Html/Header&Navigation&Footer.php");
?>
<!DOCTYPE html>


<head>
	<link rel="stylesheet" type="text/css" href="Combo.css">
<style type="text/css">

		#section {background-color: white; opacity: 0.7;  border-radius: 18%;  text-align: center;display: table; margin: 0 auto;margin-top: 6%;transition:0.5s;padding: 0;}
		#section:hover {padding: 9px; transition:0.5s;margin-top: 4%;}
		#section a{color:white;}
		#section a:hover{opacity: 0.5;}
		#carre1 {transition:0.5s;background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-left-radius: 15%; border-bottom-right-radius:2% ; border-top-right-radius:16% ; border-top-left-radius:33%;}
		#carre2 {transition:0.5s;background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-right-radius: 15%; border-bottom-left-radius:2% ; border-top-left-radius:16% ; border-top-right-radius:33%;}
		#carre3 {transition:0.5s;background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-left-radius: 15%; border-top-right-radius:2% ; border-bottom-right-radius:16% ; border-bottom-left-radius:33%;}
		#carre4 {transition:0.5s;background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-right-radius: 15%; border-top-left-radius:2% ; border-bottom-left-radius:16% ; border-bottom-right-radius:33%;}
		@keyframes slideOut {from{}to{transform:translateX(0);transform:translateY(350rem);}}
		@keyframes slideUp {from{}to{transform:translateX(0);transform:translateY(-350rem);}}
		#carre2:hover {transform: perspective(500px) scaleZ(1.6) rotateX(-35deg);}
		#carre1:hover {transform: perspective(500px) scaleZ(1.6) rotateX(-35deg);}
		#carre3:hover {transform: perspective(500px) scaleZ(1.6) rotateX(35deg);}
		#carre4:hover {transform: perspective(500px) scaleZ(1.6) rotateX(35deg);}

		tr,tt{border-style: dashed;border-color:white;display: table-cell;}
		#Tableau{border-style: groove;margin:0 auto;border-color:white;display: none;table-layout: auto;font-size: 25px;}

		#LesVolets, #LeVentilo {background-color: white; opacity: 0.7;  border-radius: 8px; width:65%; text-align: center;display: none; margin: 0 auto;margin-top: 6%; color: grey;font-size: 28px;: center;}
		#infotemp{margin:0 auto;display : block;width: 100%;}
		#ligne {display: table-row;width: 100%;margin:0 auto;margin-top: 4%;}
		[type="number"] {width: 20%;}
</style>
<script type="text/javascript">
// pour se mettre à l'étape 1 dès le départ
            var initial=document.getElementById("section");

            // fonction pour changer l'étape

            function ChangerContenu(s)
            {
                 	document.getElementById("section").style.transition="2.2s"
                 	document.getElementById("section").style.margin= "unset"
                 	document.getElementById("section").style.transform= "scale(0.7)"
                 	document.getElementById("section").style.margin= "-1% 0% 0% 20%"
                 	document.getElementById("section").style.float="left"
                    document.getElementById("carre1").style.width = "20%"
                    document.getElementById("carre2").style.width = "20%"
                    document.getElementById("carre3").style.width = "20%"
                    document.getElementById("carre4").style.width = "20%"
                    document.getElementById("section").style.width = "60%"
                    document.getElementById("section").style.background = "none"
                
                if (1==s)
                 {

                 	document.getElementById("LaTemperature").style.display = "none"
                 	document.getElementById("LesVolets").style.display = "none"
                 	document.getElementById("LeVentilo").style.display = "none"
                    document.getElementById("LaLumino").style.display = "table"
                }
                if (2==s)
                 {
                 	document.getElementById("LaLumino").style.display = "none"
                 	document.getElementById("LesVolets").style.display = "none"
                 	document.getElementById("LeVentilo").style.display = "none"
                    document.getElementById("LaTemperature").style.display = "table"


                }
                if (3==s)
                 {
                 	document.getElementById("LaTemperature").style.display = "none"
                 	document.getElementById("LaLumino").style.display = "none"
                 	document.getElementById("LeVentilo").style.display = "none"
                    document.getElementById("LesVolets").style.display = "table"
                }
                if (4==s)
                 {
                 	document.getElementById("LaTemperature").style.display = "none"
                 	document.getElementById("LesVolets").style.display = "none"
                 	document.getElementById("LaLumino").style.display = "none"
                    document.getElementById("LeVentilo").style.display = "table"
                }
            }
</script>
</head>
<html>
		<div id = "section">
			<a onclick="ChangerContenu(1)"><div id = "carre1"><br /><img src="Images/lumiere.png"  alt="Lumière" width="80"> <br /><h3>Lumière</h3></div></a>
			<a onclick="ChangerContenu(2)"><div id = "carre2"><br /><img src="Images/temperature.png"  alt="Température" width="80"> <br /><h3>Température</h3></div></a>
			<a onclick="ChangerContenu(3)"><div id = "carre3"><br /><img src="Images/volets.png"  alt="Volets" width="80"> <br /><h3>Volets</h3></div></a>
			<a onclick="ChangerContenu(4)"><div id = "carre4"><br /><img src="Images/ventilateur.png"  alt="Ventilateur" width="80"> <br /><h3>Ventilateur</h3></div></a>
		</div>

		<div id="LesVolets">
			<div id="infotemp">
				Les volets sont actuellement ouverts/fermés
			</div>
			<hr width="75%" color=#82A898>
			<div id="ligne">
			<input type="checkbox" name="Lumieres" value="i">
			Activer/Désactiver les volets
			</div>
			<div id="ligne">
			<input type="checkbox" name="AutoLumieres" value="i">
			Activer/Désactiver l'automatisation de la lumière
			</div>
			<div id="ligne">
			Je veux que les lumières s'allument quand il est
			<input type="number" id="heurelimite" placeholder="__:__" name="heurelimite" maxlength="5"> 
			</div>
		</div>
		<div id="LeVentilo">
			<div id="infotemp">
				La température actuelle est de __°C
			</div>
			<hr width="75%" color=#82A898>
			<div id="ligne">
			<input type="checkbox" name="Ventilateur" value="i">
			Activer/Désactiver le ventilateur
			</div>
			<div id="ligne">
			<input type="checkbox" name="AutoVentilateur" value="i">
			Activer/Désactiver l'automatisation du ventilateur
			</div>
			<div id="ligne">
			Je veux que le ventilatur s'allume quand il fait
			<input type="number" id="templimite" placeholder="__°C" name="templimite" maxlength="3"> °C
		</div>
		<div id="LaTemperature"></div>
		<div id="LaLumino"></div>

</html> 