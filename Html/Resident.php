<!DOCTYPE html>
<html>
		<?php include "header&footer.php";?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Domisep</title>

	<style type="text/css">
	* {-moz-box-sizing: border-box; box-sizing: border-box;}
		body {background-color: #000000; color: white; height:100%;width:100%;background: url(../Images/H.jpg);background-size:cover;display : table; background-position: fixed; }
		header {text-align: center;background-color: white; opacity: 0.7; display :table-header-group; left:0; top:0;}
		#Head1{float : left;margin-left: 0.5%; margin-top: 0.85%; color: black;}
		#Head1 p{font-family: "Jazz LET", fantasy; padding:0;}
		#Head1 img{border-radius: 35%;}
		#Head2{ width:40%;margin: 0 auto;color: black;}
		#Head2 p{font-family: "Jazz LET", fantasy; font-size: 1.9em;}
		#Head3 {margin-right:1.3%;margin-top:1.5%;float:right;color: black;}
		#Head3 img {border-radius: 35%;}
		#Head3 button:hover{opacity: 0.5;padding: 2;border-radius: 15%;}
		#Navigation{background-color: white; opacity: 0.8; float: left; position:fixed;border-radius: 3%;margin-left: -0.5%;margin-top: 6%; color: black;display: table;font-family: "Jazz LET";font-size: 28px;text-align: center;}
		#Navigation button{display: table-cell;margin-left: auto;margin-right: auto; padding :0;width: 100%;transition: 0.3s;}
		#Navigation button:hover{opacity: 0.4; transition:0.3s;padding: 10%; }
		#Navigation a {color: grey;text-decoration: none;text-align: center;display: block;line-height: 50px; text-shadow: 2px 10px 7px rgba(0,0,0,0,0.2);font-size: 1.9em;}
		#Navigation a:hover{color:green;}
		footer {text-align: center;opacity: 0.7; width: 100%; background-color: white; bottom: 0; left: 0; right: 0; position:absolute; color:black;display : table-row;}
		#Footer2 {margin:0 auto;height: 100%;}
		#Footer2 img{display : flex; align-items:center; float: left; padding-left: 20px;}
		#Footer3 {display : flex; align-items:center;}
		#Footer3 p {margin-left: 1%;float: left; padding-right: 20%;}
		#Footer3 a {padding-right:1%;padding-left:1%;}
		#FooterReseaux {display : flex; align-items:center;justify-content : center; padding-left: 15%;}
		#FooterReseaux img{border-radius : 50%;padding-left: 20px;padding-right: 20px;}

		#section {margin-top: 8%; margin-left: 30%;width: 40%; height: 100%; background-color: white; opacity: 0.7;  border-radius: 18%; position: relative; text-align: center;}
		#carre1 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 3%; margin-left: 3.2%;border-bottom-left-radius: 15%; border-bottom-right-radius:2% ; border-top-right-radius:16% ; border-top-left-radius:33%;}
		#carre2 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 3%; margin-left: 3.2%;border-bottom-right-radius: 15%; border-bottom-left-radius:2% ; border-top-left-radius:16% ; border-top-right-radius:33%;}
		#carre3 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 3%; margin-left: 3.2%;border-top-left-radius: 15%; border-top-right-radius:2% ; border-bottom-right-radius:16% ; border-bottom-left-radius:33%;}
		#carre4 {background-color: grey; opacity: 0.8; float :left; width: 45%; height: 40%; margin-top: 3%; margin-left: 3.2%;border-top-right-radius: 15%; border-top-left-radius:2% ; border-bottom-left-radius:16% ; border-bottom-right-radius:33%;}
		.clear {clear:both;}

	</style>
</head>

<body>

	<header>
		<div id ="Head1">
			<img src = "../Images/logobase.png" alt="Logo" width="70"> 
            <p>Check They're Ok !<p>     
        </div>
        <div id="Head3">
			<img src="../Images/profil.jpg"  alt="Photo de profil" width="80"> <br />
			<button><i>Mon compte</i></button>
		</div>
        <div id="Head2"> <br />
			<p>Espace résident - Bienvenue [prénom]</p>		
		</div>
	</header> <br />

	<div id="Navigation">
		
		<i>Sommaire </i>
		<br />

			<button><a href="Resident.html">Espace résident</a></button><br />
		    <button><a href="#2">Ici</a></button><br />
		    <button><a href="#3">La bas</a></button><br />
		    <button><a href="#4">Autre page</a></button><br />
		    <button><a href="Accueil.html">Retour</a></button>
		
	</div>







		<div id = "section">
			<div id = "carre1"><h3>Lumière</h3></div>
			<div id = "carre2"><h3>Température</h3></div>
			<div id = "carre3"><h3>Passage</h3></div>
			<div id = "carre4"><h3>Cris</h3></div>
			<div classe="clear"></div>	
		</div>







	<footer>
			<br />
            <div id="Footer2">
            <img src = "../Images/Isep.png" alt="Isep" width="90"> 
            <img src = "../Images/LogoDomisep.png" alt="Domisep" width="100" > 

            <i>Équipe de techniciens : DA COSTA Sarah - MILLOT Pauline - GORGE BERNAT Arthur - POLO Romain - BELAMICH Leny - BENSOUDA Amine<i>
        	</div>
        	<br />
        	<HR align=center>
        	<div id = "Footer3">
        		<p><i>CheckThey'OK© 2018-2019</i></p>	-
	            <a href = "FAQ.html"><u> FAQ </u></a> -
	            <a href = "Email.html"><u>Nous contacter</u></a> -
	            <a href = "CGU.html"><u> Conditions générales d'utilisations </u></a> -
	            <div id = "FooterReseaux">
	                <div> 
	                        <a href = "NOMPAGE.html"><img src = "../Images/twitter.png" width=70"></a> <br />
	                        Twitter
	                </div>
	                <div>
	                        <a href = "NOMPAGE.html"><img src = "../Images/instagram.png" width="70"> </a> <br />
	                        Instagram
	                </div>
	                <div>
	                        <a href = "NOMPAGE.html"><img src = "../Images/facebook.png" width="70"></a> <br />
	                        Facebook
	                </div>
                	<br />
            	</div>
        	</div>
    </footer>
</body>
</html>