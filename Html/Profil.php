<!DOCTYPE Html>

<html>
    <?php include "Header&Navigation&Footer.php";?>
    <body>

        <section>

    	   <article id = "contenu1" name = "Profil">
                <form method="POST" action="" enctype="multipart/form-data">
        		<label for = "nom">Nom </label>
        		<input type = "text" name ="nom"><br>
        		<label for = "prenom">Prénom </label>
        		<input type = "text" name ="prenom"><br>
        		<label for = "mdp">Mot de passe</label>
        		<input type = "text" name ="mdp"> <br>
                <label> Avatar : </label>
                <input type="file" name="avatar"/> <br>
                <select name = "langues">

                    <option value="français">français</option>
                    <option value="anglais">anglais</option>

                </select>
            
            </article>	

            <article id = "contenu2" name = "Coordonnées">

                <label for = "telephone">Téléphone</label>
                <input type="text" name = "telephone"><br>
                <label for = "email">E-mail</label>
                <input type="text" name = "email">

            </article>  

             <article id = "contenu3" name = "Notification">
            <p>Dans le cas où un problème est détecté, comment souhaitez-vous être contacté ?</p>
            <input type = checkbox>
            <label>par appel téléphonique</label><br>
            <input type = checkbox>
            <label>par sms</label><br>
            <input type = checkbox>
            <label>par e-mail</label><br>
            <input type = "submit" value ="Mettre à jour mon profil" > <br>


        </article>

        </section>


   
 </body> 
 
</html>