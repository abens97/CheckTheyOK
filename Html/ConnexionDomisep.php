<!DOCTYPE html>

<?php
    include("../Models/Connexion.php");
    include("../Controlers/Controler_connexion.php");
?>

<html>
	
	<head>

		<meta charset = "utf-8">
		<title>connexion resident</title>

	</head>

	<header>

		<img src = "./Images/logobase.png">
		<div id = "slogan">
        	<h2> Check They're Ok ! </h2>
        	<h3> <i> Domisep </i> </h3>
        </div>
        <a href = "NOMPAGE.html">
            <button> <font size="+2"> Tableau de bord</font> </button>
        </a>
		<hr width = "100%">  

	</header>

	<body>

        <h2>Accès Domisep</h2>
        <form method='POST' action=''>
		<label for = "identifiant">Identifiant</label>
		<input type = "text" id='identifiant' name = "identifiant"><br>
		<label for = "mdp">Mot de passe</label>
		<input type = "text" id='motdepasse' name = "mdp"><br>
		<br>
                <input type = 'submit' name='Connexion' value='Connexion'>           
        </form>
         <a href = "NOMPAGE.html">
            <p> <u> Identifiant ou mot de passe oublié ? </u> </p>
         </a>
         <div id = "bouton2">
         	<a href="NOMPAGE.HTML">
         		<button><font size ="+2">Accès Référent</font></button>
         	</a>
         	<a href="NOMPAGE.HTML">
         		<button><font size ="+2">Accès Gestionnaire</font></button>
         	</a>
         	<a href="NOMPAGE.HTML">
         		<button><font size ="+2">Accès Résident</font></button>
         	</a>
         </div>




	</body>

	<footer>

		 <div id = "global">
            <div id = "Reseaux">
                <div id = "Facebook"> 
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "twitter.jpg">
                        </a>
                        <figcaption>Twitter</figcaption>
                    </figure>
                </div>
                
                <div id = "Instagram">
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "insta.png">
                        </a>
                        <figcaption>Instagram</figcaption>
                    </figure>
                </div>
                
                <div id ="Facebook">
                    <figure>
                        <a href = "NOMPAGE.html">
                            <img src = "facebook.png">
                        </a>
                        <figcaption>Facebook</figcaption>
                    </figure>
                </div>
            </div>
            <a href = "NOMPAGE.html">
                <p> <u> Conditions générales d'utilisations </u> </p>
            </a>
        </div>

	</footer>


</html>