<?php include("./includes/fonctions/sqlconnect.php"); ?>
<?php
	$reponse = $bdd->query('SELECT content FROM textes WHERE id=1');
	while ($donnees = $reponse->fetch())		
		{
			echo $donnees['content'];
		}
	$reponse->closeCursor();
?>
