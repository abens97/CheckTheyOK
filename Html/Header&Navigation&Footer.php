<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
	<style type="text/css">
	* {-moz-box-sizing: border-box; box-sizing: border-box;}
		body {margin:0 auto;background-color: #000000; color: white; height:100%;width:100%;background: url(../Images/H.jpg);background-size:cover;display : table; background-position: fixed; }
		header { text-align: center;background-color: white; opacity: 0.7; display :table-header-group;}
		#Head1{float : left;margin-left: 0.5%; margin-top: 0.85%; color: black;}
		#Head1 p{font-family: "Jazz LET", fantasy; padding:0;}
		#Head1 img{border-radius: 35%;}
        #Head2{ width:40%;margin: 0 auto;color: black;}
		#Head2 p{font-family: "Jazz LET", fantasy; font-size: 1.9em;}
		#Head3 {text-decoration: none;margin-right:1.3%;margin-top:1.5%;float:right;color: black;}
		#Head3 img {border-radius: 35%;}
		#Head3 button:hover{opacity: 0.6;padding: 2;border-radius: 15%;}
		#Head3 a {text-decoration: none;}
		#Navigation{transition:1s;background-color: white; opacity: 0.8; float: left; position:fixed;border-radius: 3%;margin-top: 6%; color: black;display: table;font-family: "Jazz LET";font-size: 28px;}
		#Navigation button{display: table-cell;margin-left: auto;margin-right: auto; padding :0;width: 100%;transition: 0.3s;}
		#Navigation button:hover{text-align: center;opacity: 0.9; transition:1s;padding: 10%;}
		#Navigation a {color: grey;text-decoration: none;text-align: center;display: block;line-height: 50px; text-shadow: 2px 10px 7px rgba(0,0,0,0,0.2);font-size: 1.9em;}
		#Navigation a:hover{color:green;}
		#Navigation:hover {width:12%;transition:1s;}
		#Navigation img {display: none;}
		#Navigation:hover img {display: block;float:left;align-items:baseline;padding:0;}
		#titre{margin-left: 20%;}
		#Navigation:hover #titre {margin-left: 14%;}
		footer {text-align: center;opacity: 0.7; width: 100%; background-color: white; bottom: 0; left: 0; right: 0; position:absolute; color:black;display : table-row;}
		#Footer2 {margin:0 auto;height: 100%;}
		#Footer2 img{display : flex; align-items:center; float: left; padding-left: 20px;}
		#Footer3 {display : flex; align-items:center;}
		#Footer3 p {margin-left: 1%;float: left; padding-right: 20%;}
		#Footer3 a {padding-right:1%;padding-left:1%;}
		#FooterReseaux {display : flex; align-items:center;justify-content : center; padding-left: 15%;}
		#FooterReseaux img{border-radius : 50%;padding-left: 20px;padding-right: 20px;}

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
			<button><a href="Accueil.php"><i>Se déconnecter</i></a></button>
        </div>
        <div id="Head2"> <br />
			<p>Titre de la page</p>		
		</div>
        

	</header> <br />

	<div id="Navigation">
		<div id="titre">
		<img src = "../Images/loupe.png" alt="Logo" width="35"> 
		<i>Menu</i></div>
		

			<button><a href="Statistiques.php">Journal</a></button><br />
		    <button><a href="Programmer.php">Commander</a></button><br />
		    <button><a href="Logements.php">Logements</a></button><br />
		    <button><a href="Profil.php">Profil</a></button><br />
		    <button><a href="Accueil.php">Accueil</a></button>
		
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
	            <a href = "FAQ.php"><u> FAQ </u></a> -
	            <a href = "mailto:groupeapp8a@gmail.com"><u>Nous contacter</u></a> -
	            <a href = "CGU.php"><u> Conditions générales d'utilisations </u></a> -
	            <div id = "FooterReseaux">
	                <div> 
	                        <a href = "http://www.twitter.com" target="_blank"><img src = "../Images/twitter.png" width=70"></a> <br />
	                        Twitter
	                </div>
	                <div>
	                        <a href = "http://www.instagram.com" target="_blank"><img src = "../Images/instagram.png" width="70"></a> <br />
	                        Instagram
	                </div>
	                <div>
	                        <a href = "http://www.facebook.com" target="_blank"><img src = "../Images/facebook.png" width="70"></a> <br />
	                        Facebook
	                </div>
                	<br />
            	</div>
        	</div>
    </footer>
</body>
</html>