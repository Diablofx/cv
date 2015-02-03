<?php 
	if(isset($_POST['homecontent']))      
		$nom=$_POST['homecontent'];
	else      
		$nom="";
	if(empty($nom))
		{ 
  			echo 'Attention, Champ Vide !'; 
  		} 
  	else      
 			{ 
 				include("sqlconnect.php");
 				$sql = "UPDATE textes SET content = '". $nom."' WHERE id = 1;"; 
 				$stmt = $bdd->prepare($sql);
        $stmt->bindParam(':content', $_POST['content'], PDO::PARAM_STR); 
        $stmt->execute();  
  			echo ' Vos infos on été ajoutées. '; 
  		}  
      $stmt->closeCursor(); // Termine le traitement de la requête
?>
