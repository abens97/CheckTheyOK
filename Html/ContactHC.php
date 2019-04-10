<!DOCTYPE html>

<?php include "Header&FooterHorsConnexion.php";?>

<style type="text/css">

		#Nouscontacter{margin-left : 40%;}
		#Nouscontacter label {
  			/* Afin de s'assurer que toutes les étiquettes aient la même dimension et soient alignées correctement */
  			display: inline-block;
  			width: 125px;
  			text-align: center;
  			margin-top:10px;
		}
		#Nouscontacter textarea {
		  /* Pour aligner correctement les champs multilignes et leurs étiquettes */
		  vertical-align: top;
		  margin-top:10px;
		  /* Pour donner assez d'espace pour entrer du texte */
		  height: 250px ;
		  width : 250px;

		  /* Pour permettre aux utilisateurs de redimensionner un champ textuel horizontalement
		     Cela ne marche pas avec tous les navigateurs  */
		  resize: vertical;
		  background-color: white;
		}

		#Nouscontacter input{
  		background-color: white;	
  		width: 200px;
  		margin-top:10px;
		}
</style>

<html>

	<div id="Nouscontacter">
	<form method="post" action="messagerie.php">
			<label for="nom">Nom & Prénom </label>
			<input type="text" <id="nom" name="nom"><br>
			<label for="e-mail">E-mail</label>
			<input type="text" <id="e-mail" name="e-mail"><br>

			<label for="message">Votre message </label>
			<textarea id="message"></textarea><br>

			<input type="submit" value="Envoyer">
		</form>
	</div>


</html>