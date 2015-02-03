<div class="row nopadding"> 
	<div class="col-md-6 col-sm-6 col-xs-12" id="photo">

		<?php include("./includes/fonctions/sqlconnect.php"); ?>
		<?php
		    // On récupère tout le contenu de la table 
		    $reponse = $bdd->query('SELECT * FROM images WHERE id=1');

		    // On affiche chaque entrée une à une
		    while ($donnees = $reponse->fetch())     
			    {
			    	echo '<img id="profil" data-src="'.$donnees['src'].'" alt="'.$donnees['alt'].'" src="./images/load.gif"/>';
			    }
			$reponse->closeCursor(); // Termine le traitement de la requête
	    ?>
	    
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12" id="presentation">
		<p class="welcome">
			<span class="verybig">Bienvenue,</span><br>
			<span class="big">à propos de moi :</span>
		</p>
	</div>

	<div class="col-md-6 col-sm-12 col-xs-12 bubules">
		<div class="boutons">
			<div class="col-md-4 col-sm-4 col-xs-4 rond bleu">
				<a class="block" href="formation">Formation</a>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-4 rond rose">										
				<a class="block" href="competences">Compétences</a>											
			</div>

			<div class="col-md-4 col-sm-4 col-xs-4 rond vert">										
				<a class="block" href="experience">Expériences</a>
			</div>
		</div>
	</div>

	<div class="col-md-6 col-sm-12 col-xs-12 bubulesmobile">
			<div class="row">
				<ul>
					<li class="bleu"><a class="block" href="formation">Formation</a></li>
					<li class="rose"><a class="block" href="competences">Compétences</a></li>
					<li class="vert"><a class="block" href="experience">Expériences</a></li>
				</ul>
			</div>	
	</div>

	<div class="col-md-6 col-sm-12 col-xs-12">
		<p class="blabla">
			<?php include("./includes/fonctions/mysql.php"); ?>
		</p>					
	</div>
</div>

<div class="row nopadding">
	<div class="col-md-12 col-sm-12 col-xs-12" id="texthome">
		<h2>Technologies utilisées</h2>
		<p>
			Pour la création de sites web je privilégie l'utilisation de technologies récentes et adaptés à l'utilisation mobile du site (Je suis par ailleur adepte du "<b>Mobile First</b>"), j'utilise par exemple le framework <b>Bootstrap</b> de Twitter afin de
			garantir un affichage completement responsive quelque soit le périphérique : PC / Mac, Smartphone ou Tablette, le <b>CDN Cloudflare</b> me permet d'optimiser les temps de chargement des sites.<br/>
			Les services de Google Analytics permettent une analyse précise et poussée des visites que reçoit le site et ainsi l'optimisation de l'UX (<b>User eXperience</b>).<br/>
			Afin de présenter une UI (<b>User Interface</b>) en accord avec la tendances actuels : Le <b>Flat Design</b>, j'utilise les fonctions des languages <b>HTML5</b> et <b>CSS3</b> ainsi que du <b>JavaScript</b> via le framework <b>Jquery</b>.<br/>
			La charte <b>W3C</b> me permet d'écrire un code le plus propre et efficace possible et l'utilisation d'<b>URL Rewriting</b> permet de présenter un site claire et simple de navigation.<br/>
			Enfin, la performance du site avant sa mise en ligne est controlé via les sites <b>Woorank</b>, <b>Gtmetrix</b> et <b>Google page speed</b>, ces outils me sont aussi utiles une fois le site en ligne afin de l'optimiser et de controler son bon fonctionnement.
			J'utilise le site <b>Alyse</b> afin de bien me rendre compte de la pondération des mots clés sur les pages du site web créé.
		</p>
	</div>
</div>