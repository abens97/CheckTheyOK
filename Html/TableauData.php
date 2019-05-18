<!DOCTYPE html>
<html>

	<?php
	
	?>

<head>
		
	
	<title></title>
	<style type="text/css">

	</style>


</head>

<body>
    <div>
        <h1>Liste des gestionnaires</h1>

        <ul>
            <?php foreach ($gestionnaires as $gestionnaire) { ?>
                <li>Le gestionnaire possédant l'adresse email <?= $gestionnaire["email_gestionnaire"]; ?> est en charge du logement n°<?= $gestionnaire["debut_plage_logement"]; ?> à <?= $gestionnaire["fin_plage_logement"]; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>