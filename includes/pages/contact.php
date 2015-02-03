<?php 
    if (!isset($_GET['action']))
        {
            include("./includes/pages/contact-content.php");
        }

    else 
        {
            $filename = $_GET['action'];
            if ($filename == "send")
                {
                    include("./includes/pages/contact-content.php");
                    include("./includes/fonctions/traitement_formulaire.php");
                }
            else
                {
                    include("./includes/pages/error.php");
                }       
            
        }
?> 
