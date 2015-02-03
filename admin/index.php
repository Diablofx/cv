<!DOCTYPE HTML>
<html lang="fr">
	<?php include("./includes/fonctions/head.php"); ?>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="eta_scrollbar mobileonly"><div id="prog" style=" width: 0%;"></div></div>
				<?php 
					include("./includes/pages/topbar.php"); 
						if (!isset($_GET['id']))
							{
								include("./includes/pages/home.php");
							}

						else 
							{
								$filename = "./includes/pages/" . $_GET['id'] .".php";
								if (strpos($filename, '../') == true) 
									{
										include("./includes/pages/error.php");
									}
									elseif (file_exists($filename)) 
										{
											include("./includes/pages/" . $_GET['id'] .".php");	
										}
									else
										{
											include("./includes/pages/error.php");
										}	
							}
					include("./includes/pages/footer.php");
					include("./includes/fonctions/js.php"); 
				 ?>	
			</div>
		</div>
	</body>
</html>
