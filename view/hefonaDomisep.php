<!DOCTYPE html>
<html>
<?php 
	include "model/connection.php";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Asap');
	* {-moz-box-sizing: border-box; box-sizing: border-box;}
		body {background-color: #000000; color: white; height:100%;width:100%;background: url(view/Images/H.jpg);background-size:cover;display : table; background-position: fixed;overflow-x: hidden;overflow-y: hidden }
		header { text-align: center;background-color: white; opacity: 0.7; display :table-header-group;}
		@keyframes slideIn {from{}to{transform:translateX(0);transform:translateY(0);}}
		#Head1{float : left;margin-left: 0.5%; margin-top: 0.85%; color: black;transform:translateX(-100rem);animation: slideIn 0.5s forwards;}
		#Head1 p{font-family: "Jazz LET", fantasy; padding:0;}
		#Head1 img{border-radius: 18px;}
    #Head2{ width:40%;margin: 0 auto;color: black;text-align: center;transform:translateY(-100rem);animation: slideIn 0.5s forwards;}
		#Head2 p{font-family: "Jazz LET", fantasy; font-size: 1.9em;}
		#Head3 {text-decoration: none;margin-right:1.3%;margin-top:1%;float:right;color: black;transform:translateX(100rem);animation: slideIn 0.5s forwards;}
		#Head3 img {border-radius: 18px;padding-bottom: 4%; }
		#Head3 button:hover{opacity: 0.8;padding: 4px;}
		#Head3 a {text-decoration: none;}
		#Navigation{text-align: center; transition:0.8s;background-color: white; opacity: 0.8; float: left; position:fixed;border-radius: 3%;margin-top: 12%; color: black;display: table;font-family: "Jazz LET";font-size: 28px;transform:translateX(-100rem);animation: slideIn 1.2s forwards;}
		#Navigation button{display: table-cell;margin-left: auto;margin-right: auto; padding :0;width: 100%;transition: 0.3s;}
		#Navigation button:hover{text-align: center;opacity: 0.6; transition:0.4s;padding: 10%;background-color: lightgrey;}
		#Navigation a {color: grey;text-decoration: none;text-align: center;display: block;line-height: 50px; text-shadow: 2px 10px 7px rgba(0,0,0,0,0.2);font-size: 1.9em;}
		#Navigation a:hover{color:green;}
		#Navigation:hover {width:12%;transition:1s;}
		#Navigation img {display: none;transition:0.4s;}
		#Navigation:hover img {display: block;float:right;transition:1s;}
		
		#Navigation:hover #titre {margin:0;text-align:center;margin-left:29%;transition:0.2s;position: relative}
		
		footer {text-align: center;opacity: 0.7; width: 100%; background-color: white; bottom: 0; left: 0; right: 0; position:absolute; color:black;display : table-row;}
		#Footer2 {margin:0 auto;height: 100%;}
		#Footer2 img{display : flex; align-items:center; float: left; padding-left: 20px;}
		#Footer3 {display : flex; align-items:center;}
		#Footer3 p {margin-left: 1%;float: left; padding-right: 20%;}
		#Footer3 a {padding-right:1%;padding-left:1%;}
		#FooterReseaux {display : flex; align-items:center;justify-content : center; padding-left: 15%;}
		#FooterReseaux img{border-radius : 50%;padding-left: 20px;padding-right: 20px;}
		#descente #dropprofil {
  margin:0 auto;
  font-size: 16px;
  border: none;
  outline: none;
  color: black;
  padding: 16px 35px;
  background-color: inherit;
  font-family: inherit; 
  background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: -o-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.26));
  -webkit-box-shadow: -3px -3px 3px rgba(0, 0, 0, 0.48);
  box-shadow: -2px -3px 3px rgba(0, 0, 0, 0.48);
  border: 3px solid;
  border-color: lightgrey grey lightgrey;
  border-radius: 7px;
}
#descente a:hover, #descente:hover #dropprofil, #descente-content input:hover {

  background-image: -webkit-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: -moz-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: -o-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.66));
}
#descente a, #descente-content input {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  
  text-decoration: none;
}
#Head3 button {
	border-radius: 8px;
	font-size: 22px;
  background-color: lightgrey;
  color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: center;
  text-shadow: 2px 10px 7px rgba(0,0,0,0,0.5);
}

#descente-content a, #descente-content input {
	
  float: none;
  color: grey;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  text-shadow: 2px 10px 7px rgba(0,0,0,0,0.2);
}

#descente-content a:hover, #descente-content input:hover { color: white;text-decoration: none;text-align: center;transition:0.8s;padding: 13%;
  background-color: grey;
}

#descente:hover #descente-content {
	transition: 2s;
  display: block;
}

	</style>
</head>

<body>

	<header>
		<div id ="Head1">
			<a href="index.php?cible=domisep"><img src = "view/Images/logobase.png" alt="Logo" width="70"></a>
            <p>Check They're Ok !<p>     
        </div>
        <div id="Head3">
			<img src="view/Images/domis.png"  alt="Photo de profil" width="100"> 
			
						<form method='POST' action='index.php?cible=domisep&action=deconnexion'>
						<button type='submit' value = '&#10174 Se déconnecter' id='deconnexion' name='deconnexion'>&#10174 Se déconnecter</button>
						</form>
						
		    
		      </div>
		    </div>
			
        </div>
        
        <div id="Head2"> <br />
            <?php if (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Accueil_Domisep'):?>
			<p> Bonjour Domisep</p>
            <?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep'):?>
			<p> Bonjour Domisep </p>
			<?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Statistiques_Domisep'):?>
			<p> Statistiques Globales</p>
			<?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Configuration_Domisep'):?>
			<p> Configuration</p>
			<?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Gestionnaires_Domisep'):?>
			<p> Gestionnaires</p>
			<?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Faq_Domisep'):?>
			<p> FAQ</p>
			<?php elseif (basename($_SERVER['REQUEST_URI'])=='index.php?cible=domisep&action=see_Cgu_Domisep'):?>
			<p> Conditions Générales d'Utilisation</p>
      <?php endif ?>
		</div>
        

	</header> <br />

	<div id="Navigation">
		<img src = "view/Images/loupe.png" alt="Logo" width="35"> 
		<div id="titre">
			<i>Menu</i>
		</div>

			<button><a href="index.php?cible=domisep&action=see_Accueil_Domisep">Accueil</a></button><br />
			<button><a href="index.php?cible=domisep&action=see_Statistiques_Domisep">Statistiques</a></button><br />
		    <button><a href="index.php?cible=domisep&action=see_Configuration_Domisep">Configuration</a></button><br />
		    <button><a href="index.php?cible=domisep&action=see_Gestionnaires_Domisep">Gestionnaires</a></button><br />
		
	</div>

	<footer>
			<br />
            <div id="Footer2">
            <a href = "https://www.isep.fr" target="_blank"><img src = "view/Images/Isep.png" alt="Isep" width="90"></a> 
            <img src = "view/Images/LogoDomisep.png" alt="Domisep" width="100" > 

            <i>Équipe de techniciens : Sarah DA COSTA - Pauline MILLOT - Leny BELAMICH - Romain POLO - Arthur GORGE BERNAT - Amine BENSOUDA<i>
        	</div>
        	<br />
        	<HR align=center>
        	<div id = "Footer3">
        		<p><i>CheckThey'OK© 2018-2019</i></p>	-
	            <a href = "index.php?cible=domisep&action=see_Faq_Domisep"><u> FAQ </u></a> -
	            <a href = "mailto:<?php echo getEmailContact($bdd)?>"><u>Nous contacter</u></a> -
	            <a href = "index.php?cible=domisep&action=see_Cgu_Domisep"><u> Conditions générales d'utilisation </u></a> -
	            <div id = "FooterReseaux">
	                <div> 
	                        <a href = "http://www.twitter.com" target="_blank"><img src = "view/Images/twitter.png" width=70"></a> <br />
	                        Twitter
	                </div>
	                <div>
	                        <a href = "http://www.instagram.com" target="_blank"><img src = "view/Images/instagram.png" width="70"></a> <br />
	                        Instagram
	                </div>
	                <div>
	                        <a href = "http://www.facebook.com" target="_blank"><img src = "view/Images/facebook.png" width="70"></a> <br />
	                        Facebook
	                </div>
                	<br />
            	</div>
        	</div>
    </footer>
</body>
</html>