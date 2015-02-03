<?php
  if ($_FILES['img2up']['error'] > 0) $erreur = "Erreur lors du transfert";


  $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
  //1. strrchr renvoie l'extension avec le point (« . »).
  //2. substr(chaine,1) ignore le premier caractère de chaine.
  //3. strtolower met l'extension en minuscules.
  $extension_upload = strtolower(  substr(  strrchr($_FILES['img2up']['name'], '.')  ,1)  );
  if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";



  if(isset($_POST['img2alt']))   
    $alt=$_POST['img2alt'];
  else  
    $alt="";  

  if(isset($_POST['img2name']))      
    $name=$_POST['img2name'];
  else  
    {    
      $name="";
    }

    $nom = "../images/".$name.".{$extension_upload}";
    $src = "./images/".$name.".{$extension_upload}";
    $resultat = move_uploaded_file($_FILES['img2up']['tmp_name'],$nom);
    if ($resultat) echo " Transfert réussi ";

    include("sqlconnect.php");
    $sql = "UPDATE images SET src = '".$src."' WHERE id = 2;"; 
    $sql2 = "UPDATE images SET alt = '".$alt."' WHERE id = 2;";                          
                              
    $stmt = $bdd->prepare($sql);
    $stmt2 = $bdd->prepare($sql2);
    $stmt->bindParam(':src', $_POST['src'], PDO::PARAM_STR); 
    $stmt2->bindParam(':alt', $_POST['alt'], PDO::PARAM_STR); 
    $stmt->execute();
    $stmt2->execute();    
    echo ' Vos infos on été ajoutées.'; 
      
      $stmt->closeCursor(); // Termine le traitement de la requête
      $stmt2->closeCursor(); // Termine le traitement de la requête
?>
