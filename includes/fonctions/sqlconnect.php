<?php
	try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=cv_perret_ovh', 'cv_perret_ovh', 'XjKz0EuFpSVhHI0');
		}
		
	catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}
?>