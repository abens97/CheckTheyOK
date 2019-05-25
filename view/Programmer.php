
<?php
	//session_start();
	require ("view/hefonaUser.php");
?>
<!DOCTYPE html>


<head>
	<link rel="stylesheet" type="text/css" href="Combo.css">
	<link rel="stylesheet" type="text/css" href="Toggle.css">
<style type="text/css">

		#section {background-color: rgba(255,255,255,0.5);  border-radius: 18%;  text-align: center;display: table; margin: 0 auto;margin-top: 6%;transition:0.5s;padding: 0;}
		#section:hover {padding: 9px; transition:0.5s;margin-top: 4%;}
		#section a{color:#62657F;}
		#section a:hover{opacity: 0.5;}
		#carre1 {transition:0.5s;background-color: rgba(255,255,255,0.75); float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-left-radius: 15%; border-bottom-right-radius:2% ; border-top-right-radius:16% ; border-top-left-radius:33%;}
		#carre2 {transition:0.5s;background-color: rgba(255,255,255,0.75); float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-bottom-right-radius: 15%; border-bottom-left-radius:2% ; border-top-left-radius:16% ; border-top-right-radius:33%;}
		#carre3 {transition:0.5s;background-color: rgba(255,255,255,0.75); float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-left-radius: 15%; border-top-right-radius:2% ; border-bottom-right-radius:16% ; border-bottom-left-radius:33%;}
		#carre4 {transition:0.5s;background-color: rgba(255,255,255,0.75); float :left; width: 45%; height: 40%; margin-top: 1.6%; margin-left: 2.4%; margin-right: 2.4%;margin-bottom: 1.6%;border-top-right-radius: 15%; border-top-left-radius:2% ; border-bottom-left-radius:16% ; border-bottom-right-radius:33%;}
		
		#carre2:hover {transform: perspective(500px) scaleZ(1.6) rotateX(-35deg);}
		#carre1:hover {transform: perspective(500px) scaleZ(1.6) rotateX(-35deg);}
		#carre3:hover {transform: perspective(500px) scaleZ(1.6) rotateX(35deg);}
		#carre4:hover {transform: perspective(500px) scaleZ(1.6) rotateX(35deg);}

		#MaisonChgmnt {margin-left: 10%; align-content: all;vertical-align: center;}
		
		#Tableau{border-style: groove;margin:0 auto;border-color:white;display: table;table-layout: auto;font-size: 25px;}
		#Chambre, #Salon, #Douche, #Escalier {display: none;width: 70%;margin: 0 auto;}

		#ZoneDeTexte {background-color: white; opacity: 0.7;  border-radius: 18px;  text-align: center;display: table-cell; margin-top: 6%; color: grey;width: 47%;margin:0 auto;font-size: 22px;margin-left: 15px;margin-right: 15px;}
		#ZoneDeTexte:hover {transform: scale(1.03);}
		#ligne {display: row;margin: auto;align-content: center;padding-bottom: 1%;}

		#infotemp{margin:0 auto;display : block;width: 100%;}

		[type="number"] {width: 20%;}
		#test {background-color: white;color:black;display: table-cell;margin:0 auto;width: 100%;}

</style>
<script type="text/javascript">            

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

                 	document.getElementById("Douche").style.display = "none"
                 	document.getElementById("Salon").style.display = "none"
                 	document.getElementById("Escalier").style.display = "none"
                    document.getElementById("Chambre").style.display = "table"
                }
                if (2==s)
                 {
                 	document.getElementById("Chambre").style.display = "none"
                 	document.getElementById("Salon").style.display = "none"
                 	document.getElementById("Escalier").style.display = "none"
                    document.getElementById("Douche").style.display = "table"


                }
                if (3==s)
                 {
                 	document.getElementById("Douche").style.display = "none"
                 	document.getElementById("Chambre").style.display = "none"
                 	document.getElementById("Escalier").style.display = "none"
                    document.getElementById("Salon").style.display = "table"
                }
                if (4==s)
                 {
                 	document.getElementById("Douche").style.display = "none"
                 	document.getElementById("Salon").style.display = "none"
                 	document.getElementById("Chambre").style.display = "none"
                    document.getElementById("Escalier").style.display = "table"
                }
            }
</script>
</head>
<html>	
		<div id="MaisonChgmnt">
			<img src = "view/Images/home.png" alt="Changer de maison" width="30">
			<div class="dropdown">
	        	<select name="one" class="dropdown-select">
		        	<option value=""><i>-- Logement --</i></option>
		        	<option value="M1"> Maison 1 </option>
		        	<option value="M2"> Maison 2 </option>
		        	<option value="M3"> Maison 3 </option>
	            </select>
	        </div>     
        </div>                             
		<div id = "section">
			<a onclick="ChangerContenu(1)"><div id = "carre1"><br /><img src="view/Images/lumiere.png"  alt="Lumière" width="80"> <br /><h3>Lumière</h3></div></a>
			<a onclick="ChangerContenu(2)"><div id = "carre2"><br /><img src="view/Images/temperature.png"  alt="Température" width="80"> <br /><h3>Température</h3></div></a>
			<a onclick="ChangerContenu(3)"><div id = "carre3"><br /><img src="view/Images/volets.png"  alt="Volets" width="80"> <br /><h3>Volets</h3></div></a>
			<a onclick="ChangerContenu(4)"><div id = "carre4"><br /><img src="view/Images/ventilateur.png"  alt="Ventilateur" width="80"> <br /><h3>Ventilateur</h3></div></a>
		</div>
		
		<div id="Chambre">
			<div id="ZoneDeTexte">
				<div>
					Les volets sont actuellement ouverts/fermés
				</div>
				<hr width="75%" color=#82A898>
				<div id="ligne">
					<button>Ouvrir les volets</button>
					<button>Fermer les volets</button>
				</div>
				<div>
					Ouvrir les volets à : <input type="number" name="Lumieres" id="OuvrirVolets">
				</div>
				<div>
					Fermer les volets à : <input type="number" name="Lumieres" id="FermerrVolets">
				</div>
				<button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Enregistrer</button>
			</div>

			<br />
			
			<div id="ZoneDeTexte">
				<div>
					Le ventilateur est actuellement en marche/arrêt.
				</div>
				<hr width="75%" color=#82A898>
				<div id="ligne">
					<button>Allumer le ventilateur</button>
					<button>Éteindre le ventilateur</button>
				</div>
				<div>
					Allumer le ventilateur à : <input type="number" name="Lumieres" id="OnVentilateur">
				</div>
				<div>
					Éteindre le ventilateur à : <input type="number" name="Lumieres" id="OffVentilateur">
				</div>
				<button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Enregistrer</button>
			</div>

					
		</div>

		<div id="Douche">
			
		</div>

		<div id="Salon">
			
		</div>

		<div id="Escalier">
			
		</div>

</html> 