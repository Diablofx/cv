<div class="row nopadding"> 
	<div class="large-6 medium-6 small-12 columns" id="idcard">
		<h3>Présentation</h3>
		<ul>
			<li>Je suis un homme Célibataire</li>
			<li>J'ai 22 ans</li>
			<li>Je suis né le 23/12/1992 à Feurs (42)</li>
			<li>Je suis de Nationalité Française</li>
			<li>Je possède les permis Voiture et Moto ainsi qu'un véhicule</li>
		</ul>		
	</div>
	<div class="large-6 medium-6 small-12 columns" id="idcardimg">
		<?php include("./includes/fonctions/sqlconnect.php"); ?>
		<?php
		    // On récupère tout le contenu de la table 
		    $reponse = $bdd->query('SELECT * FROM images WHERE id=2');

		    // On affiche chaque entrée une à une
		    while ($donnees = $reponse->fetch())     
			    {
			    	echo '<img id="profil" data-src="'.$donnees['src'].'" alt="'.$donnees['alt'].'" src="./images/load.gif" />';
			    }
			$reponse->closeCursor(); // Termine le traitement de la requête
	    ?>
	</div>
</div>